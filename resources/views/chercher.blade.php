<!DOCTYPE html>

<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Marvin I Login</title>
		<meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		
		<!-- Latest compiled and minified CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
	<body style="background-color:white;">
		
		<style>
            .bande
            {
                background-image:  linear-gradient(to bottom, rgba(0, 0, 0, 0.24) 0%, rgba(0, 0, 0, 0.24) 100%),url("/images/bande.webp");
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
         
        </style>
		<!-- HK Wrapper -->
		<div class="hk-wrapper" style="background-color:white;">
			
			<!-- Main Content -->
			<div class="hk-pg-wrapper hk-auth-wrapper"  style="background-color:white;">
				<header class="d-flex text-center" style="background-color: green;padding: 0px;color: white;">
					<h4 class="text-center" style="width: 100%;"> PUBLICATIONS OFFICIELLES DU CONSULAT</h4>
				</header>
                <div style="background-color: white;">
                    <img src="{{ asset('images/logo.webp') }}" style="padding: 20px;">
                </div>
                <div style="width: 100%; height: 200px; color: white;" class="bande ">

                    <h1 style="text-align: center; padding-top:90px;"> Verification de la Disponibilte de votre Carte d'dientité</h1>
                </div>


			</div>
			<!-- /Main Content -->
            <div class="row">
                <div class="col-md-2">

                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                         <form method="POST" action="{{ route('chercher.carte') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Votre Nom</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="ex: Fall" name="nom" required>
                                      </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Votre Prenom</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="ex: Modou" name="prenom" required>
                                      </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Votre date de Naissance</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="ex: 21/11/90" name="date_daiss" required>
                                      </div>
                                </div>
                                <center>
                                    @if ($message = Session::get('message'))
                                        <div class="alert alert-success">
                                            <p>{{ $message }}</p>
                                        </div>
                                     @endif
                                    <button type="submit" class="btn btn-outline-success">Valider</button>
                                </center>
                            </div>

                           
                         </form>
                        </div>
                      </div>
                </div>

                <div class="col-md-4">
                    
                </div>
            </div>
		
		</div>
		<!-- /HK Wrapper -->
		
		<!-- JavaScript -->

	</body>
</html>