<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script type="module" src="./assets/src/js/data.js"></script>
        <link rel="stylesheet" href="./assets/dist/css/order.styles.css" />
        <title>order-app</title>
    </head>
    <body>
  
    <header class="header">
        <div class="header__logo--box">
            <img src="./assets/src/img/icons/logo.svg" alt="logo">
        </div>
        <div class="header__info">
            <div class="header__info--progress">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 0;" aria-valuenow="25" aria-valuemin="0"
                        aria-valuemax="100"></div>
                </div>
            </div>

        </div>
    </header>

    <main class="content">

       <div class="pages">
           <section class="page page-1 search__page active animated">
                <h1 class="page-title"> Relatie zoeken </h1>

                <form action="#" class="form search__page--form">
                    <div class="form__field">
                        <div class="form__field--label">
                            <label for="klant" class="label">Klant</label>
                        </div>
                        <div class="form__field--input">
                            <input type="text" class="input search-input" id="klant" placeholder="voer hier customer voornaam en achternaam" required/>
                        </div>
                    </div>
                </form>

                <div class="btn__box">
					<div class="btn__box--next">
						<button class="btn__next verder"> 
							Nieuwe Klant
						</button>
					</div>
					<div class="btn__box--back">
						<button class="btn__back search">Zoek</button>
					</div>
				</div>

           </section>
        

           <section class="section page page-2 input__page">
                <h1 class="page-title"> Invoer persoonlijke gegevens </h1>
                <form action="#" class="form search__page--form">
                    <div class="form__field">
                        <div class="form__field--label">
                            <label for="voornaam" class="label">Voornaam</label>
                        </div>
                        <div class="form__field--input">
                            <input type="text" class="input search-input" id="voornaam" placeholder="voer hier uw voornaam in" required/>
                        </div>
                    </div>

                    <div class="form__field">
                        <div class="form__field--label">
                            <label for="tussenvoegsel" class="label">Tussenvoegsel</label>
                        </div>
                        <div class="form__field--input">
                            <input type="text" class="input search-input" id="tussenvoegsel" placeholder="voer hier uw achternaam in" required/>
                        </div>
                    </div>

                    <div class="form__field">
                        <div class="form__field--label">
                            <label for="achternaam" class="label">Achternaam</label>
                        </div>
                        <div class="form__field--input">
                            <input type="text" class="input search-input" id="achternaam" placeholder="voer hier uw achternaam in" required/>
                        </div>
                    </div>

                    <div class="form__field">
                        <div class="form__field--label">
                            <label for="postcode" class="label">Postcode</label>
                        </div>
                        <div class="form__field--input">
                            <input type="text" class="input search-input" id="postcode" placeholder="voer hier uw postcode in" required/>
                        </div>
                    </div>

                    <div class="form__field">
                        <div class="form__field--label">
                            <label for="plaats" class="label">Plaats</label>
                        </div>
                        <div class="form__field--input">
                            <input type="text" class="input search-input" id="plaats" placeholder="voer hier uw plaats in" required/>
                        </div>
                    </div>

                    <div class="form__field">
                        <div class="form__field--label">
                            <label for="land" class="label">Land</label>
                        </div>
                        <div class="form__field--input">
                            <select type="text" class="countrypicker input search-input select" id="land" aria-label="form-select">
                                <!-- <option value="1" selected>kies uw land</option> -->
                            </select>
                        </div>
                    </div>

                    <div class="form__field">
                        <div class="form__field--label">
                            <label for="email" class="label">E-mailadres</label>
                        </div>
                        <div class="form__field--input">
                            <input type="text" class="input search-input" id="email" placeholder="voer hier uw emailadres in" required/>
                        </div>
                    </div>

                    <div class="form__field">
                        <div class="form__field--label">
                            <label for="tel" class="label">Telefoonnumer</label>
                        </div>
                        <div class="form__field--input">
                            <input type="text" class="input search-input" id="tel" placeholder="voer hier uw telefoonnumer in" required/>
                        </div>
                    </div>

                    <div class="form__field">
                        <div class="form__field--label">
                            <label for="tel" class="label">Extra Opmerking</label>
                        </div>
                        <div class="form__field--input">
                            <textarea rows="10" type="text" class="input search-input" id="tel" placeholder="voer hier uw extra opmerking in"></textarea>
                        </div>
                    </div>

                </form>

                <div class="btn__box">
					<div class="btn__box--next">
						<button class="btn__next terug"> 
							TERUG
						</button>
					</div>
					<div class="btn__box--back">
						<button class="btn__back verder">VERDER</button>
					</div>
				</div>
            </section>


            <section class="page page-3 select-watch__page">
                <h1 class="page-title">Collectie</h1>
                <form action="#" class="form collectie__form">
                    <div class="form__field">
                            <div class="form__field--label">
                                <label for="land" class="label">Horloge</label>
                            </div>
                            <div class="form__field--input">
                                <select type="text" class="watchpicker input search-input select" id="land" aria-label="form-select">
                                    <option value="1" selected>kies uw horloge</option>
                                </select>
                            </div>
                    </div>

                    <div class="form__field">
                        <div class="form__field--label">
                            <label for="land" class="label">Band</label>
                        </div>
                        <div class="form__field--input">
                            <select type="text" class="bandpicker input search-input select" id="land" aria-label="form-select">
                                <option value="1" selected>kies uw band</option>
                            </select>
                        </div>
                    </div>
                </form>

				<div class="specifications">
					<h1 class="page-title-mini">Specificaties</h1>
					<hr />
					<div class="watch__details">
						<div class="detail--columns">
							<span>Type</span>
							<span>Prijs</span>
							<span>Details</span>
						</div>
					<hr />
						<div class="watch">
							<div class="watch__title"> </div>
						</div>
						<div class="band">
							<div class="band__title"> </div>
						</div>
					</div>
				</div>

                <div class="btn__box">
					<div class="btn__box--next">
						<button class="btn__next terug"> 
							TERUG
						</button>
					</div>
					<div class="btn__box--back">
						<button class="btn__back verder">VERDER</button>
					</div>
				</div>
            </section>

       
       
       
        </div>

            
    </main>

    <footer class="footer">
        <div class="footer__logo--box">
            <img src="./assets/src/img/icons/foot.svg" alt="logo">
        </div>
    </footer>
    </body>
    <script type="module" defer src="./assets/src/js/main.js"></script>
</html>
