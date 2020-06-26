
    
    


<!DOCTYPE html>
<html <?= language_attributes(); ?>>
<head>
	<title>Mon site zukzuk</title>
	<meta charset="<?= bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
	<style type="text/css">
		
		html{
			margin: -1%;
			background-color: black;
		}
		/*
		*{
			border:1px red solid;
		}

		/* Fonts */
			@font-face {

			}


		/* ACCUEIL */

			/* HEADER */

				header{
					background-color: black;
					display: flex;
					color: white;
					justify-content: space-between;
					border-bottom: 1px #26639c solid;
				}
				#identite {
					display: flex;
					align-items: center;
				}

				/* LOGO & BASELINE */

					#logo{
						max-width: 30%;
						height: auto;
						margin: 2% 2% 0 2%;
					}

					#baseline{
						margin-top: -1%;
						margin-left: 2%;
						height:auto;
						width: auto;
					}

				/* LOGIN */

					form{
						display: flex;
						width: auto;
						min-width: 250px;
						background-color: black;
						align-items: c
					}
					input{
						border:1px black solid;
					}

					#pbConnexion{
						display: flex;
					}

					.lien:nth-of-type(1){
						margin-right: 2%;
					}

					.lien {
						color: white;
						font-size: 0.8em;
					}
					.lien:hover {
						color: #26639c;
					}

					#ok:active{
						background-color: #26639c;
						color: white;
					}
			
			/* CORPS */

				#corps{
					background: url(./IMAGES/buggatti.jpg) no-repeat;
					min-height: 600px;
				}

				#slogan{
					background-color: rgba(112, 113, 117, 0.33);
					color: white;
					font-size: 24px;
					max-width: 55%;
					margin: 5% 0 0 2%;
					padding: 1%;
				}
				#slogan .lien{
					margin: 0;
					font-size: 24px;
				}
			
			/* FOOTER */
				footer {
					display: flex;
					justify-content: space-around;
					height: 100px;
					background-color: black;
					color:white;
					align-items: center;
					border-top: 1px #26639c solid;

				}

				/* Peakcell */
					footer section h2{
						font-size: 14px;
						margin: 0;
						margin-bottom: -15px;
					}
				/* Email */
					footer section h3{
						font-size: 12px;
						margin: 0;
					}
					footer section h3 a{
						font-size: 12px;
						margin: 0;
						color: white;
					}
					footer section h3 a:hover{
						color: #26639c;
					}

				/* FAQ */
					footer section a{
						font-size: 14px;
						margin: 0;
						color: white;
					}
						footer section a:hover{
						color: #26639c;
					}

				/* Mentions légales */
					footer section p{
						font-size: 14px;
						margin: 0;
						color: white;
					}
			
					footer section p:nth-of-type(1):hover{
						color: #26639c;
					}

				#FAQ:first-child {
					margin-top: 1%;
				}
				#contact {
					display: flex;
					flex-direction: column;
					justify-content: flex-start;
				}

		/* S'inscrire */

			.fond-transparent-30{
				background: url(./IMAGES/buggatti-40.jpg) no-repeat;
				min-height: 600px;
				display: flex;
				align-items: center;
				font-weight: bold;

			}

			label {
				margin: 0 2%;
			}

			#formulaireInscription{
				background: #26639c;
				opacity: 0.8;
				padding: 2% 30%;
				width: 100%;
				min-height: 500px;
				display: flex;
				flex-direction: column;
				border-radius: 5px;
			}

			#formulaireInscription input{
				margin: 5px;
				height: 30px;
				padding: 0 0 0 10px; 
			}

			#formulaireInscription h2 {
				color: white;
				margin-bottom: 5px;
			
			}

			 #formulaireInscription h3{
				color: white; 
				margin-top: 0;
				font-size: 1em;



			}
			#valider{
				align-self: flex-end;
				width: 100px;
				margin-top: 40px;
				font-size: 0.9em;
				box-shadow: 1px 1px 1px grey;
			}
			
			#alert{
				font-size: 0.6em;
				color: white;
				visibility: hidden;
				margin-top: -0.5em;
				padding-left: 1em; 
			}
	</style>

	<?= wp_head(); ?>
</head>
<body <?= body_class(); ?>>
	<?= wp_body_open(); ?>
	<header class="header">
			<?= require('identite_PEAKCELL.php'); ?>
			<?= require('lz_login.php') ?>
	</header>
