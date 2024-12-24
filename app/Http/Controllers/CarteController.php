<?php

namespace App\Http\Controllers;

use App\Models\Carte;
use App\Repositories\CarteRepository;
use Illuminate\Http\Request;
use Spatie\SimpleExcel\SimpleExcelReader;

class CarteController extends Controller
{
    protected $carteRepository;

    public function __construct(CarteRepository $carteRepository){
        $this->carteRepository =$carteRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartes = $this->carteRepository->getAll();
        return view('carte.index',compact('cartes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carte.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cartes = $this->carteRepository->store($request->all());
        return redirect('carte');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carte = $this->carteRepository->getById($id);
        return view('carte.show',compact('carte'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carte = $this->carteRepository->getById($id);
        return view('carte.edit',compact('carte'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->carteRepository->update($id, $request->all());
        return redirect('carte');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->carteRepository->destroy($id);
        return redirect('carte');
    }
    public function    allCarteapi(){
        $cartes = $this->carteRepository->getAllOnLy();
        return response()->json($cartes);
    }
    public function importExcel(Request $request)
{

   /*   $data =  Excel::import(new CarteImport,$request['file']);
 //   dd($data);

    return redirect()->back()->with('success', 'Données importées avec succès.'); */
    $this->validate($request, [
        'file' => 'bail|required|file|mimes:xlsx'
    ]);

    // 2. On déplace le fichier uploadé vers le dossier "public" pour le lire
    $fichier = $request->file->move(public_path(), $request->file->hashName());

    // 3. $reader : L'instance Spatie\SimpleExcel\SimpleExcelReader
    $reader = SimpleExcelReader::create($fichier);

    // On récupère le contenu (les lignes) du fichier
    $rows = $reader->getRows();

    // $rows est une Illuminate\Support\LazyCollection

    // 4. On insère toutes les lignes dans la base de données
  //  $rows->toArray());
    $status = Carte::insert($rows->toArray());

    // Si toutes les lignes sont insérées
    if ($status) {

        // 5. On supprime le fichier uploadé
        $reader->close(); // On ferme le $reader
       // unlink($fichier);

        // 6. Retour vers le formulaire avec un message $msg
        return back()->withMsg("Importation réussie !");

    } else { abort(500); }
}

public function viewChercher()
{
    return view("chercher");
}

public function chercherParNomPrenomDateNaiss(Request $request)

{
   $carte = $this->carteRepository->chercherParNomPrenomDateNaiss($request);
   $message = '';
   if($carte)
   {
    $message  = 'Votre est disponible';

   }
   else
   {
    $message = 'Votre carte est en cours de confection';
   }
   return redirect()->back()->with(["message"=>$message]);
}

}