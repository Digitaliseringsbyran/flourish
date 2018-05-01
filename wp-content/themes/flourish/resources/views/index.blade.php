@extends('layouts.app')

@section('content')
	<section class="col-11 sm-col-8 clearfix mx-auto pt6 pb5">
		<div class="col col-12 sm-col-6">
			<h1 class="landing__title mb4">Let’s make your business grow</h1>
			<p class="landing__intro mb4">Flourish hjälper dig sätta mål, följa utvecklingen med hjälp av olika datakällor och ser till att du når dit du vill.</p>
			<a href="#" class="signup-button">Kom igång gratis <span class="signup-button__icon"></span></a>
		</div>
	</section>
	

	<section class="feature-section col-11 sm-col-8 clearfix mx-auto pb6">
		<div class="col-12 relative">
			<video src="" class="feature-video mb3">
				
			</video>
		</div>
		<div class="feature-grid clearfix mxn3">
			<div class="feature col col-12 sm-col-6 px3 mt3">
				<div class="card">
					<h4 class="feature__title mb3">
						<span class="feature__icon">
								
						</span>
						<span class="inline-block">Ta beslut baserat på data</span>
					</h4>
					<p class="feature__description">Data från ditt företags favoritverktyg samlas på ett och samma ställe och ger dig en helhetsbild.</p>
				</div>
			</div>
			<div class="feature col col-12 sm-col-6 px3 mt3">
				<div class="card">
					<h4 class="feature__title mb3">
						<span class="feature__icon">
								
						</span>
						<span class="inline-block">Lär av andra</span>
					</h4>
					<p class="feature__description">Få inspiration och tips av andra som jobbat med liknande mål och utmaningar.</p>
				</div>
			</div>
			<div class="feature col col-12 sm-col-6 px3 mt3">
				<div class="card">
					<h4 class="feature__title mb3">
						<span class="feature__icon">
								
						</span>
						<span class="inline-block">Oslagbar översikt</span>
					</h4>
					<p class="feature__description">Följ allt från webbplatsbesökare till försäljning och kampanjer på samma ställe.</p>
				</div>
			</div>
			<div class="feature col col-12 sm-col-6 px3 mt3">
				<div class="card">
					<h4 class="feature__title mb3">
						<span class="feature__icon">
								
						</span>
						<span class="inline-block">Målorienterat på riktigt</span>
					</h4>
					<p class="feature__description">Fokusera på dina mål och jobba effektivt för att nå dem.</p>
				</div>
			</div>
		</div>
	</section>



	<section class="goal-section pt6 pb6">
		<div class=" col-11 sm-col-8 clearfix mx-auto">
			<div class="col-12 sm-col-7">
				<h2 class="mb4">Sätt mål, följ och nå dem enklare än någonsin.</h2>
				<p class="goal__description mb4">Välj bland flera populära mål få förslag på åtgärder och följ dem till framgång.</p>
			</div>
			<div class="clearfix mxn2">
				<div class="col col-12 sm-col-7 px2 mt2">
					<img class="goal__img" src="" alt="">
				</div>
				<div class="col col-12 sm-col-5 px2 mt2">
					<ul class="pl4">
						<li class="goal__li mb3"><div class="goal__icon"></div>Marknadsföring</li>
						<li class="goal__li mb3"><div class="goal__icon"></div>HR</li>
						<li class="goal__li mb3"><div class="goal__icon"></div>Försäljning</li>
						<li class="goal__li mb3"><div class="goal__icon"></div>Kundservice</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section class="pricing-section pt6 pb6">
		<div class="col-11 sm-col-8 clearfix mx-auto">
			<div class="col-12 sm-col-8">
				<h2 class="mb4">Vi vill hjälpa företag av alla storlekar att jobba datadrivet</h2>
			</div>


			<div class="col-12 clearfix mt5 mxn2">
				<div class="col col-12 sm-col-6 mt4 px2">
					<h3 class="pricing__group mb3">Småföretag</h3>
					<span class="pricing__price mb4 block">Gratis</span>
					<p class="pricing__description">Create beautiful, professional campaigns and marketing automations for free—no design or coding experience necessary. It's so easy, you can start sending today.</p>
				</div>
				<div class="col col-12 sm-col-6 mt4 px2">
					<div class="pricing-table">
						<table class="">
							<tr>
								<td class="pricing-table__data p3">1 Användare</td>
							</tr>
							<tr>
								<td class="pricing-table__data p3">Obegränsad funktionalitet</td>
							</tr>
							<tr>
								<td class="pricing-table__data p3">Företagskonto</td>
							</tr>
						</table>
						<a href="" class="pricing-table__button block">
							Köp nu
						</a>
					</div>
				</div>
			</div>

			<div class="col-12 clearfix mt5 mxn2">
				<div class="col col-12 sm-col-6 mt4 px2">
					<h3 class="pricing__group mb3">Medelföretag</h3>
					<span class="pricing__price mb4 block">199kr</span>
					<p class="pricing__description">Create beautiful, professional campaigns and marketing automations for free—no design or coding experience necessary. It's so easy, you can start sending today.</p>
				</div>
				<div class="col col-12 sm-col-6 mt4 px2">
					<div class="pricing-table">
						<table class="">
							<tr>
								<td class="pricing-table__data p3">1 Användare</td>
							</tr>
							<tr>
								<td class="pricing-table__data p3">Obegränsad funktionalitet</td>
							</tr>
							<tr>
								<td class="pricing-table__data p3">Företagskonto</td>
							</tr>
						</table>
						<a href="" class="pricing-table__button block">
							Köp nu
						</a>
					</div>
				</div>
			</div>

			<div class="col-12 clearfix mt5 testset mxn2">
				<div class="col col-12 sm-col-6 mt4 px2">
					<h3 class="pricing__group mb3">Storföretag</h3>
					<span class="pricing__price mb4 block">299kr</span>
					<p class="pricing__description">Create beautiful, professional campaigns and marketing automations for free—no design or coding experience necessary. It's so easy, you can start sending today.</p>
				</div>
				<div class="col col-12 sm-col-6 mt4 px2">
					<div class="pricing-table">
						<table class="">
							<tr>
								<td class="pricing-table__data p3">1 Användare</td>
							</tr>
							<tr>
								<td class="pricing-table__data p3">Obegränsad funktionalitet</td>
							</tr>
							<tr>
								<td class="pricing-table__data p3">Företagskonto</td>
							</tr>
						</table>
						<a href="" class="pricing-table__button block">
							Köp nu
						</a>
					</div>
				</div>
			</div>
			
		</div>
	</section>
@endsection
