<?php include 'inc/header-scripts.php'; ?>

		<div class="brk-header-mobile">
			<div class="brk-header-mobile__open"><span></span></div>
			<div class="brk-header-mobile__logo"><a href="index.php"><img class="brk-header-mobile__logo-1 lazyload" src="img/logo.png" data-src="img/logo.png" alt="alt"> <img class="brk-header-mobile__logo-2 lazyload" src="img/logo.png" data-src="img/logo.png" alt="alt"></a></div>
		</div>
		<header class="brk-header brk-header_style-1 brk-header_skin-1 position-fixed d-lg-flex flex-column brk-header_color-dark position-fixed bg-white" style="display: none;" data-logo-src="img/logo.png" data-brk-library="component__header">
			<div class="brk-header__main-bar brk-header_border-top-dark order-lg-2 order-1" style="height: 72px;">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-1 align-self-lg-center d-none d-lg-flex">
							<a href="index.php" class="brk-header__logo brk-header__item @@modifier"><img class="brk-header__logo-1 lazyload" src="img/logo.png" data-src="img/logo.png" alt="alt"> <img class="brk-header__logo-2 lazyload" src="img/logo.png" data-src="img/logo.png" alt="alt"></a>
						</div>
						<div class="col-lg align-self-lg-stretch text-lg-right">
							<nav class="brk-nav brk-header__item">
								<ul class="brk-nav__menu">
									<li class="home-menu d-xs-none"><a href="index.php"><div>Home</div></a></li>
									<li><a href="about-us.php"><div>About Us</div></a></li>
									<li><a href="talents.php"><div><span class="d-lg-none menu_for">For</span> Talents</div></a></li>
									<li><a href="business-owners.php"><div><span class="d-lg-none menu_for">For</span> Business owners <br class="d-lg-none">& intermediaries</div></a></li>
									<li><a href="co-investors.php"><div><span class="d-lg-none menu_for">For</span> Co-investors</div></a></li>
									<li><a href="news-resources.php"><div>News & Resources</div></a></li>
								</ul>
							</nav>
						</div>
						<div class="col-lg-2 align-self-lg-stretch text-lg-right header_third_part">
						<div class="brk-header__item h-100 d-flex align-items-center justify-content-center">
							<a href="#" class="bg-transparent font_family-arial btn btn-prime btn-sm border-radius-25 font__weight-bold shadow-none header_btn" data-brk-library="component__button">English</a>
							<a href="#" class="bg-transparent font_family-arial btn btn-prime btn-sm border-radius-25 font__weight-bold shadow-none header_btn header_btn_mb d-lg-none" data-brk-library="component__button">Deutsch</a>
							<a href="#" class="bg-transparent font_family-arial btn btn-prime btn-sm border-radius-25 font__weight-bold shadow-none header_btn header_btn_mb d-lg-none" data-brk-library="component__button">Francais</a>

							<div class="footer_btns">
							<a href="#" class="social_icon d-inline-flex align-items-center justify-content-center border-radius-5 p-1 font__family-avenir"><i class="fab fa-linkedin-in font__size-18"></i></a></div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="brk-theme-options form_side_bar bg-primary" data-brk-library="brk-customizer">
		    <div class="brk-theme-options__panel panel-open shadow-none">
			    <a href="#" class="brk-theme-options__panel-link border-0">KONTAKT <i class="fa fa-arrow-down mr-2"></i></a>
		    </div>
			<div class="brk-theme-options__control shadow-none bg-primary p-5 get_touch_main">
				<div class="brk-theme-options__header get_title">
					<h2 class="text-white font__family-efb font__size-60 text-uppercase">Kontaktieren <br> Sie uns</h2>
					<div class="brk-theme-options__close panel-close function_btn" id="info0"></div>
				</div>
				<div class="row">
					<div class="col-lg-12" id="infocontent">
						<div class="functon_div current" id="info0content">
							<div class="get_in_touch_content">
								<p class="font__family-open-sans font__size-20 text-white pt-2">
                                Wählen Sie Ihr Profil 
								</p>
							</div>	
							<div class="links_buttons pt-40">
								<ul class="pl-0">
									<li class="d-inline-block">
										<button class="btn btn-pos function_btn btn-md border-radius-30 rendered brk-library-rendered mr-1" id="info1">Unternehmer</button>
									</li>
									<li class="d-inline-block">
										<button class="btn btn-pos function_btn btn-md border-radius-30 rendered brk-library-rendered ml-1" id="info2">Geschäftsinhaber</button>
									</li><br>
									<li class="d-inline-block">
										<button class="btn btn-pos function_btn btn-md border-radius-30 rendered brk-library-rendered mr-1" id="info3">Investor</button>
									</li>
									<li class="d-inline-block">
										<button class="btn btn-pos function_btn btn-md border-radius-30 rendered brk-library-rendered ml-1 mr-1" id="info4">Geschäftsvermittler</button>
									</li>
									<li class="d-inline-block">
										<button class="btn btn-pos function_btn btn-md border-radius-30 rendered brk-library-rendered ml-1" id="info5">Sonstige</button>
									</li>
								</ul>
							</div>	
						</div>	
					</div>	
					<div class="col-lg-12" id="infocontent">
						<div class="functon_div" id="info1content">
							<a href="talents.php" class="h-100">
								<div class="get_in_touch_content">
									<p class="font__family-open-sans font__size-20 text-white pt-2 border-bottom pb-3 talent_text pr-30">
                                    Bitte besuchen Sie unsere Unternehmerseite für eine Bewerbung über den dazugehörigen Link. 
									</p>
								</div>
								<div class="text-right arrow_link position-static pt-100">
									<img src="img/arrow.png" alt="arrow" />
								</div>
						    </a>
						</div>	
					</div>
					<div style="display: none;" id="form-alert-success" class="alert alert-success" role="alert">
                    Informationen wurden erfolgreich gesendet!
					</div>
					<!-- start  form-business-owner-->
					<form  id="form-business-owner" name="form-business-owner" method="post">
						<div class="col-lg-12" id="infocontent">
							<div class="functon_div" id="info2content">
								<div class="get_in_touch_content">
									<p class="font__family-open-sans font__size-20 text-white pt-2 pb-3 talent_text pr-30">
                                    Bitte füllen Sie das untenstehende Kontaktformular aus. Wir werden uns zeitnah bei Ihnen melden. 
									</p>
								</div>
								<div class="resources_form resources_form_side">  
									<form id="business_owner_contact_form" class="investors_contact_form">
									<div class="d-inline brk-form-round mr-30 selection_div s_side">
										<select name="Title">
											<option value="Title" selected disabled>Titel</option>
											<option value="Mr.">Frau</option>
											<option value="Ms.">Herr</option>
											<option value="Dr.">Dr.</option>
										</select>
									</div>
										<div class="form-group  position-relative">
											<span class="text-white label_staric position-absolute">*</span>
											<input type="text" class="form-control bg-white px-4 border-radius-25" name="First_Name" id="first-name" placeholder="Name" required>
										</div>
										<div class="form-group  position-relative">
											<span class="text-white label_staric position-absolute">*</span>
											<input type="text" class="form-control bg-white px-4 border-radius-25" name="Last_Name" id="last-name" placeholder="Nachname" required>
										</div>
										<div class="form-group  position-relative">
											<span class="text-white label_staric position-absolute">*</span>
											<input type="email" class="form-control bg-white px-4 border-radius-25" name="Email" id="e_mail" placeholder="Email" required>
										</div>
										<div class="form-group">
											<div class="radio d-inline-flex">
												<input type="radio" id="optradio1" name="optradio1">
												<label class="font__size-14 font__family-open-sans text-white d-inline-block line__height-14 ml-2" for="optradio1">Newsletter abonnieren </label>
											</div>
											<div class="radio d-inline-flex">
												<input type="radio" id="optradio2" name="optradio2" required>
												<label class="font__size-14 font__family-open-sans text-white d-inline-block line__height-14 ml-2" for="optradio2"> Mit der Anmeldung zum Formular stimmen Sie unseren Nutzungsbedingungen und Datenschutzbestimmungen zu.</label>
											</div>
										</div>
										<div id="form-business-owner-submit" class="submit_btn w-100 text-center">	
											<button type="submit" class="text-white btn btn-prime btn-md btn-outline-hover border-radius-5 bg-transparent font__size-14 px-5 shadow-none"><span>Send</span><span class="border-btn submit_border"></span></button>
										</div>    
										<div id="form-business-owner-loading" class="submit_btn w-100 text-center" style="display: none;" disabled>	
											<button type="submit" class="text-white btn btn-prime btn-md btn-outline-hover border-radius-5 bg-transparent font__size-14 px-5 shadow-none">
												<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>	
												<span>Senden...</span><span class="border-btn submit_border"></span>
											</button>
										</div>    
									</form>
									<div class="privacy_policy_link text-center mt-20">
										<a href="img/TermsAndConditions.pdf" download target="_blank" class="font__size-12 font__family-open-sans text-white underline">Terms & privacy policy</a>
									</div>	
								</div>
							</div>	
						</div>
					</form>
					 <!-- end  form-business-owner-->

					<!-- start  form-co-investor-->
					<form  id="form-co-investor" name="form-co-investor" method="post">
						<div class="col-lg-12" id="infocontent">
							<div class="functon_div" id="info3content">
								<div class="get_in_touch_content">
									<p class="font__family-open-sans font__size-20 text-white pt-2 pb-3 talent_text pr-30">
										Please complete the form below and our Investor Relations Director will be in touch shortly.
									</p>
								</div>
								<div class="co_investors_form">  
									<form id="header_co_investors_contact_form" class="investors_contact_form">
										<div class="form-group  position-relative">
											<span class="text-white label_staric position-absolute">*</span>
											<input type="text" class="form-control bg-white px-4 border-radius-25" name="First_Name" id="first-name" placeholder="Name" required>
										</div>
										<div class="form-group  position-relative">
											<span class="text-white label_staric position-absolute">*</span>
											<input type="text" class="form-control bg-white px-4 border-radius-25" name="Last_Name" id="last-name" placeholder="Nachname" required>
										</div>
										<div class="form-group  position-relative">
											<span class="text-white label_staric position-absolute">*</span>
											<input type="mail" class="form-control bg-white px-4 border-radius-25" name="Email" id="e_mail" placeholder="Email" required>
										</div>
										<div class="form-group  position-relative">
											<textarea class="form-control p-4 bg-white border-radius-25" id="co_investors_text" name="Description" placeholder="Nachricht" rows="3"></textarea>
										</div>	
										<div class="form-group">
											<div class="radio d-inline-flex">
												<input type="radio" name="optradio01" id="optradio01">
												<label class="font__size-14 font__family-open-sans text-white d-inline-block line__height-14 ml-2" for="optradio01">Newsletter abonnieren </label>
											</div>
											<div class="radio d-inline-flex">
												<input type="radio" id="optradio02" name="optradio02" required>
												<label class="font__size-14 font__family-open-sans text-white d-inline-block line__height-14 ml-2" for="optradio02">Mit der Anmeldung zum Formular stimmen Sie unseren Nutzungsbedingungen und Datenschutzbestimmungen zu.</label>
											</div>
										</div>
										<div id="form-co-investor-submit" class="submit_btn w-100 text-center">	
											<button type="submit" class="text-white btn btn-prime btn-md btn-outline-hover border-radius-5 bg-transparent font__size-14 px-5 shadow-none"><span>Send</span><span class="border-btn submit_border"></span></button>
										</div>
										<div id="form-co-investor-loading" class="submit_btn w-100 text-center" style="display: none;" disabled>	
											<button type="submit" class="text-white btn btn-prime btn-md btn-outline-hover border-radius-5 bg-transparent font__size-14 px-5 shadow-none">
												<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>	
												<span>Sending...</span><span class="border-btn submit_border"></span>
											</button>
										</div>    
									</form>
									<div class="privacy_policy_link text-center mt-20">
										<a download href="img/TermsAndConditions.pdf" target="_blank" class="font__size-12 font__family-open-sans text-white underline">Terms & privacy policy</a>
									</div>	
								</div>
							</div>	
						</div>	
					</form>
					<!-- end  form-co-investor-->

					<!-- start  form-intermediary-->
					<form  id="form-intermediary" name="form-intermediary" method="post">
						<div class="col-lg-12" id="infocontent">
							<div class="functon_div" id="info4content">
								<div class="get_in_touch_content">
									<p class="font__family-open-sans font__size-20 text-white pt-2 pb-3 talent_text pr-30">
                                    Bitte füllen Sie das untenstehende Kontaktformular aus. Wir werden uns zeitnah bei Ihnen melden 
									</p>
								</div>
								<div class="resources_form resources_form_side">  
									<form id="intermediatry_contact_form" class="investors_contact_form">
										<div class="d-inline brk-form-round mr-30 selection_div s_side ">
										<select name="select you profile">
											<option value="Title" selected disabled>Title</option>
											<option value="Mr.">Frau</option>
											<option value="Ms.">Herr</option>
											<option value="Dr.">Dr</option>
										</select>
									</div>
										<div class="form-group  position-relative">
											<span class="text-white label_staric position-absolute">*</span>
											<input type="text" class="form-control bg-white px-4 border-radius-25" name="First_Name" id="first-name" placeholder="Name" required>
										</div>
										<div class="form-group  position-relative">
											<span class="text-white label_staric position-absolute">*</span>
											<input type="text" class="form-control bg-white px-4 border-radius-25" name="Last_Name" id="last-name" placeholder="Nachname" required>
										</div>
										<div class="form-group  position-relative">
											<span class="text-white label_staric position-absolute">*</span>
											<input type="mail" class="form-control bg-white px-4 border-radius-25" name="Email" id="e_mail" placeholder="Email" required>
										</div>
										<div class="form-group">
											<div class="radio d-inline-flex">
												<input type="radio" id="optradio3" name="optradio3">
												<label class="font__size-14 font__family-open-sans text-white d-inline-block line__height-14 ml-2" for="optradio3">Newsletter abonnieren </label>
											</div>
											<div class="radio d-inline-flex">
												<input type="radio" id="optradio4" name="optradio4" required>
												<label class="font__size-14 font__family-open-sans text-white d-inline-block line__height-14 ml-2" for="optradio4">Mit der Anmeldung zum Formular stimmen Sie unseren Nutzungsbedingungen und Datenschutzbestimmungen zu.</label>
											</div>
										</div>
										<div id="form-intermediary-submit" class="submit_btn w-100 text-center">	
											<button type="submit" class="text-white btn btn-prime btn-md btn-outline-hover border-radius-5 bg-transparent font__size-14 px-5 shadow-none"><span>Send</span><span class="border-btn submit_border"></span></button>
										</div>    
										<div id="form-intermediary-loading" class="submit_btn w-100 text-center" style="display: none;" disabled>	
											<button type="submit" class="text-white btn btn-prime btn-md btn-outline-hover border-radius-5 bg-transparent font__size-14 px-5 shadow-none">
												<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>	
												<span>Senden...</span><span class="border-btn submit_border"></span>
											</button>
										</div>
									</form>
									<div class="privacy_policy_link text-center mt-20">
										<a download href="img/TermsAndConditions.pdf" target="_blank" class="font__size-12 font__family-open-sans text-white underline">Terms & privacy policy</a>
									</div>	
								</div>
							</div>	
						</div>
					</form>
					<!-- end  form-intermediary-->

					<div class="col-lg-12" id="infocontent">
						<div class="functon_div" id="info5content">
							<a href="talents.php" class="h-100">
								<div class="get_in_touch_content">
									<p class="font__family-open-sans font__size-20 text-white pt-2 border-bottom pb-3 talent_text pr-30">
                                    Bitte besuchen Sie unsere Unternehmerseite für eine Bewerbung über den dazugehörigen Link.
									</p>
								</div>
								<div class="text-right arrow_link position-static pt-100">
									<img src="img/arrow.png" alt="arrow" />
								</div>
						    </a>
						</div>	
					</div>
				</div>	
			</div>
	    </div>
		