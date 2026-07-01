<!-- Modern Preloader -->
<div id="preloader" class="artify-preloader">
    <div class="preloader-container">
        <div class="preloader-logo">
            <img src="{{ asset('assets/images/preloader.webp') }}" alt="Loading" class="logo-spinner">
        </div>
        <div class="preloader-spinner">
            <div class="spinner"></div>
        </div>
        
    </div>
</div>

<style>
/* ============================================================
   HEADER REVAMP - DOVETAIL EDITORIAL AESTHETIC
   ============================================================ */
/* Root header container */
.main-header {
  background-color: var(--color-warm-bone, #fef9f3) !important;
  border-bottom: 1px solid var(--color-ash-gray, #d7d6d4) !important;
  box-shadow: none !important;
  padding: 12px 0 !important;
  transition: all 0.3s ease !important;
}

/* logo & wordmark */
.logo-img {
  max-height: 48px !important;
  border-radius: 8px !important;
  transition: transform 0.2s ease !important;
}
.logo-img:hover {
  transform: scale(1.03);
}
.wordmark-logo {
  font-family: var(--font-lausanne), sans-serif !important;
  font-size: 32px !important;
  font-weight: 700 !important;
  letter-spacing: -0.8px !important;
  color: var(--color-ink-black, #1d1e21) !important;
  text-decoration: none !important;
  text-transform: uppercase !important;
  transition: opacity 0.2s ease !important;
}
.wordmark-logo:hover {
  opacity: 0.8 !important;
}
.brand-glyph-box {
  display: flex !important;
  align-items: center !important;
  justify-content: center !important;
  transition: transform 0.2s ease !important;
}
.brand-glyph-box:hover {
  transform: scale(1.05);
}

/* Center nav capsule container alignment */
.center-nav {
  display: flex !important;
  justify-content: center !important;
}

/* Slide-Hover Pill Navigation */
.nav-list {
  position: relative !important;
  display: flex !important;
  align-items: center !important;
  list-style: none !important;
  margin: 0 !important;
  padding: 4px !important;
  background-color: var(--color-warm-bone, #fef9f3) !important;
  border: 1px solid var(--color-ash-gray, #d7d6d4) !important;
  border-radius: 9999px !important;
  height: 52px !important;
}
.nav-list .nav-item {
  position: relative !important;
  z-index: 2 !important;
  list-style: none !important;
  margin: 0 !important;
  padding: 0 !important;
}
.nav-list .nav-link {
  position: relative !important;
  z-index: 3 !important;
  display: flex !important;
  align-items: center !important;
  column-gap: 6px !important;
  color: #ffffff !important;
  mix-blend-mode: difference !important;
  padding: 10px 22px !important;
  font-family: var(--font-lausanne), sans-serif !important;
  font-weight: 600 !important;
  font-size: 15px !important;
  text-transform: uppercase !important;
  border-radius: 9999px !important;
  border: none !important;
  background: transparent !important;
  transition: opacity 0.2s ease !important;
}
.nav-list .nav-link svg {
  stroke: currentColor !important;
  transition: transform 0.2s ease !important;
}
.nav-list .nav-link:hover svg {
  transform: translateY(1px);
}
.nav-list .nav-cursor {
  position: absolute !important;
  top: 4px !important;
  bottom: 4px !important;
  height: calc(100% - 8px) !important;
  background-color: var(--color-ink-black, #1d1e21) !important;
  border-radius: 9999px !important;
  z-index: 1 !important;
  pointer-events: none !important;
  opacity: 0;
  transition: left 0.3s cubic-bezier(0.25, 1, 0.5, 1), width 0.3s cubic-bezier(0.25, 1, 0.5, 1), opacity 0.2s ease !important;
}

/* Right-actions container spacing */
.right-actions {
  display: flex !important;
  align-items: center !important;
  column-gap: 12px !important;
}

/* Action Dropdown Buttons, Selectors, and Cart */
.selector-btn, .account-btn, .cart-btn {
  display: inline-flex !important;
  align-items: center !important;
  justify-content: center !important;
  column-gap: 8px !important;
  background-color: var(--color-warm-bone, #fef9f3) !important;
  border: 1px solid var(--color-ash-gray, #d7d6d4) !important;
  border-radius: 9999px !important;
  padding: 8px 18px !important;
  font-family: var(--font-lausanne), sans-serif !important;
  font-weight: 600 !important;
  font-size: 14px !important;
  color: var(--color-ink-black, #1d1e21) !important;
  cursor: pointer !important;
  transition: all 0.2s ease !important;
  box-shadow: none !important;
  height: 44px !important;
}
.selector-btn:hover, .account-btn:hover, .cart-btn:hover {
  background-color: var(--color-butter-cream, #f9e5b1) !important;
  border-color: var(--color-ink-black, #1d1e21) !important;
  color: var(--color-ink-black, #1d1e21) !important;
}
.selector-btn .selector-ico {
  margin-right: 2px !important;
  border-radius: 2px !important;
}

/* Cart Button indicator badge styling */
.cart-btn {
  position: relative !important;
  padding: 8px 14px !important;
  width: auto !important;
  color: var(--color-ink-black, #1d1e21) !important;
}
.cart-btn i {
  font-size: 16px !important;
}
.cart-badge {
  display: inline-flex !important;
  align-items: center !important;
  justify-content: center !important;
  background-color: var(--color-ink-black, #1d1e21) !important;
  color: var(--color-warm-bone, #fef9f3) !important;
  font-size: 11px !important;
  font-weight: 700 !important;
  border-radius: 9999px !important;
  padding: 2px 6px !important;
  min-width: 20px !important;
  height: 20px !important;
  margin-left: 4px !important;
}

/* Dropdown Menu overrides & animations */
.dropdown-menu {
  display: block !important;
  visibility: hidden !important;
  opacity: 0 !important;
  pointer-events: none !important;
  background-color: var(--color-warm-bone, #fef9f3) !important;
  border: 1px solid var(--color-ash-gray, #d7d6d4) !important;
  border-radius: 16px !important;
  padding: 8px !important;
  box-shadow: none !important;
  margin-top: 8px !important;
  mix-blend-mode: normal !important;
  z-index: 999 !important;
  transform: translateY(12px) !important;
  transition: opacity 0.25s cubic-bezier(0.25, 1, 0.5, 1), transform 0.25s cubic-bezier(0.25, 1, 0.5, 1), visibility 0.25s !important;
}
.hover-dropdown:hover > .dropdown-menu,
.dropdown.show > .dropdown-menu {
  visibility: visible !important;
  opacity: 1 !important;
  pointer-events: auto !important;
  transform: translateY(0) !important;
}

.dropdown-item {
  display: flex !important;
  align-items: center !important;
  column-gap: 10px !important;
  font-family: var(--font-lausanne), sans-serif !important;
  font-weight: 500 !important;
  font-size: 14px !important;
  color: var(--color-ink-black, #1d1e21) !important;
  padding: 10px 18px !important;
  border-radius: 9999px !important;
  transition: all 0.2s ease !important;
}
.dropdown-item:hover, .dropdown-item.active {
  background-color: var(--color-butter-cream, #f9e5b1) !important;
  color: var(--color-ink-black, #1d1e21) !important;
}
.dropdown-divider {
  border-top: 1px solid var(--color-ash-gray, #d7d6d4) !important;
  margin: 6px 0 !important;
}

/* Mega Dropdown layout */
.nav-item.dropdown {
  position: static !important; /* Let mega menu align relative to nav-list */
}
.nav-list {
  position: relative !important;
}
.mega-menu {
  position: absolute !important;
  top: calc(100% + 4px) !important;
  left: 50% !important;
  transform: translateX(-50%) translateY(12px) !important;
  width: 660px !important;
  padding: 24px !important;
  border-radius: 24px !important;
}
.hover-dropdown:hover > .mega-menu {
  transform: translateX(-50%) translateY(0) !important;
}
.mega-menu-grid {
  display: grid !important;
  grid-template-columns: 1.2fr 1fr !important;
  gap: 24px !important;
}
.mega-column {
  display: flex !important;
  flex-direction: column !important;
}
.mega-title {
  font-family: var(--font-lausanne), sans-serif !important;
  font-size: 11px !important;
  font-weight: 700 !important;
  letter-spacing: 0.05em !important;
  text-transform: uppercase !important;
  color: var(--color-ink-black, #1d1e21) !important;
  opacity: 0.5 !important;
  margin-bottom: 12px !important;
  display: block !important;
}
.mega-links {
  list-style: none !important;
  margin: 0 !important;
  padding: 0 !important;
  display: flex !important;
  flex-direction: column !important;
  row-gap: 8px !important;
}
.mega-links li {
  list-style: none !important;
}
.mega-link-item {
  display: flex !important;
  align-items: center !important;
  column-gap: 12px !important;
  padding: 10px 14px !important;
  border-radius: 14px !important;
  text-decoration: none !important;
  background: transparent !important;
  transition: all 0.2s ease !important;
  color: var(--color-ink-black, #1d1e21) !important;
}
.mega-link-item:hover {
  background-color: var(--color-butter-cream, #f9e5b1) !important;
}
.item-icon-box {
  width: 38px !important;
  height: 38px !important;
  border-radius: 10px !important;
  background-color: var(--color-warm-bone, #fef9f3) !important;
  border: 1px solid var(--color-ash-gray, #d7d6d4) !important;
  display: flex !important;
  align-items: center !important;
  justify-content: center !important;
}
.item-content {
  display: flex !important;
  flex-direction: column !important;
  row-gap: 2px !important;
}
.item-title {
  font-family: var(--font-lausanne), sans-serif !important;
  font-weight: 600 !important;
  font-size: 14px !important;
  color: var(--color-ink-black, #1d1e21) !important;
}
.item-desc {
  font-family: var(--font-lausanne), sans-serif !important;
  font-size: 11px !important;
  color: var(--color-ink-black, #1d1e21) !important;
  opacity: 0.6 !important;
}

/* Right featured card */
.featured-card {
  height: 100% !important;
  background-color: var(--color-ink-black, #1d1e21) !important;
  color: var(--color-warm-bone, #fef9f3) !important;
  border-radius: 18px !important;
  padding: 24px !important;
  display: flex !important;
  flex-direction: column !important;
  justify-content: flex-end !important;
  position: relative !important;
  overflow: hidden !important;
  min-height: 180px !important;
}
.featured-card .card-badge {
  position: absolute !important;
  top: 16px !important;
  right: 16px !important;
  background-color: var(--color-butter-cream, #f9e5b1) !important;
  color: var(--color-ink-black, #1d1e21) !important;
  font-size: 10px !important;
  font-weight: 800 !important;
  letter-spacing: 0.05em !important;
  padding: 4px 10px !important;
  border-radius: 9999px !important;
}
.featured-card .card-title {
  font-family: var(--font-lausanne), sans-serif !important;
  font-weight: 700 !important;
  font-size: 18px !important;
  line-height: 1.28 !important;
  margin: 0 0 8px 0 !important;
  color: var(--color-warm-bone, #fef9f3) !important;
}
.featured-card .card-desc {
  font-family: var(--font-lausanne), sans-serif !important;
  font-size: 12px !important;
  line-height: 1.4 !important;
  opacity: 0.75 !important;
  margin: 0 0 16px 0 !important;
  color: var(--color-warm-bone, #fef9f3) !important;
}
.featured-card .card-btn-inline {
  display: inline-flex !important;
  align-items: center !important;
  column-gap: 6px !important;
  font-family: var(--font-lausanne), sans-serif !important;
  font-weight: 600 !important;
  font-size: 13px !important;
  color: var(--color-butter-cream, #f9e5b1) !important;
  text-decoration: none !important;
  transition: column-gap 0.2s ease !important;
}
.featured-card .card-btn-inline:hover {
  column-gap: 10px !important;
}

.mega-menu-footer {
  border-top: 1px solid var(--color-ash-gray, #d7d6d4) !important;
  margin-top: 20px !important;
  padding-top: 14px !important;
  display: flex !important;
  justify-content: center !important;
}
.mega-footer-link {
  display: inline-flex !important;
  align-items: center !important;
  column-gap: 8px !important;
  font-family: var(--font-lausanne), sans-serif !important;
  font-weight: 600 !important;
  font-size: 13px !important;
  color: var(--color-ink-black, #1d1e21) !important;
  text-decoration: none !important;
  transition: opacity 0.2s ease !important;
}
.mega-footer-link:hover {
  opacity: 0.8 !important;
}

/* Account specific Dropdown headers */
.account-dropdown .account-head {
  padding: 10px 18px !important;
  display: flex !important;
  flex-direction: column !important;
  row-gap: 4px !important;
}
.account-dropdown .account-head__name {
  font-family: var(--font-lausanne), sans-serif !important;
  font-weight: 700 !important;
  font-size: 15px !important;
  color: var(--color-ink-black, #1d1e21) !important;
}
.account-dropdown .account-head__credits {
  font-family: var(--font-lausanne), sans-serif !important;
  font-weight: 600 !important;
  font-size: 13px !important;
  color: var(--color-ink-black, #1d1e21) !important;
}
.account-cta {
  padding: 4px 8px !important;
}

/* Sticky Header styling */
.sticky-header {
  background-color: var(--color-warm-bone, #fef9f3) !important;
  border-bottom: 1px solid var(--color-ash-gray, #d7d6d4) !important;
  box-shadow: none !important;
  padding: 10px 0 !important;
  transition: all 0.3s ease !important;
}
.sticky-header .logo img {
  max-height: 40px !important;
  border-radius: 6px !important;
}

/* Mobile Nav Toggle */
.mobile-nav-toggler {
  color: var(--color-ink-black, #1d1e21) !important;
  font-size: 20px !important;
  cursor: pointer !important;
  transition: transform 0.2s ease !important;
  display: flex !important;
  align-items: center !important;
  justify-content: center !important;
}
.mobile-nav-toggler:hover {
  transform: scale(1.05);
}
</style>

<!-- Main Header-->
	<header class="main-header sticky-top">
		<div class="container px-3 px-md-5">
			<div class="header-wrapper d-flex align-items-center justify-content-between py-3">
				<!-- Wordmark Logo -->
				<div class="logo-section">
					<a href="{{route('home')}}" class="wordmark-logo">GLOW HAUS</a>
				</div>

				<!-- Center Navigation -->
				<nav class="center-nav d-none d-lg-block">
					<ul class="nav-list">
						<li class="nav-item dropdown nav-dropdown hover-dropdown">
							<a href="{{route('product-lists')}}" class="nav-link nav-toggle {{ Route::is('product-lists') ? 'active' : '' }}">
								{{ __('common.header.catalog') }}
								<svg class="nav-caret" width="10" height="6" viewBox="0 0 10 6" fill="none"><path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
							</a>
							<div class="dropdown-menu mega-menu">
								<div class="mega-menu-grid">
									<!-- Categories Column (Left) -->
									<div class="mega-column categories-list">
										<span class="mega-title">{{ __('common.header.categories') ?? 'Categories' }}</span>
										<ul class="mega-links">
											@php
												$categories = \App\Models\Category::where('status','active')->where('is_parent',1)->orderBy('title','ASC')->get();
											@endphp
											@forelse($categories as $cat)
												<li>
													<a class="mega-link-item" href="{{ route('product-lists', $cat->slug) }}">
														<div class="item-icon-box">
															<i class="fas fa-sparkles text-warning" style="font-size: 13px;"></i>
														</div>
														<div class="item-content">
															<span class="item-title">{{ $cat->title }}</span>
															<span class="item-desc">Beauty & Makeup Classes</span>
														</div>
													</a>
												</li>
											@empty
												<li><span class="mega-link-item mega-link-item--muted">{{ __('common.categories.no_categories') }}</span></li>
											@endforelse
										</ul>
									</div>

									<!-- Featured Highlight Column (Right) -->
									<div class="mega-column featured-card-column">
										<div class="featured-card">
											<div class="card-badge">POPULAR</div>
											<h4 class="card-title">Professional Bridal & Makeup Academy</h4>
											<p class="card-desc">Upgrade your skill portfolio and earn course credits on our elite levels.</p>
											<a href="{{ route('product-lists') }}" class="card-btn-inline">Explore Catalog <i class="fas fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
								<div class="mega-menu-footer">
									<a href="{{route('product-lists')}}" class="mega-footer-link">
										<i class="fas fa-th"></i> <span>{{ __('common.categories.view_all') }}</span>
									</a>
								</div>
							</div>
						</li>
						<li class="nav-item"><a href="{{route('about-us')}}" class="nav-link {{ Route::is('about-us') ? 'active' : '' }}">{{ __('common.header.about')}}</a></li>
						<li class="nav-item"><a href="{{route('contact')}}" class="nav-link {{ Route::is('contact') ? 'active' : '' }}">{{ __('common.header.contact') }}</a></li>
						<li class="nav-cursor" aria-hidden="true"></li>
					</ul>
				</nav>

				<script>
					document.addEventListener('DOMContentLoaded', function() {
						const navList = document.querySelector('.center-nav .nav-list');
						const navItems = document.querySelectorAll('.center-nav .nav-list .nav-item');
						const navCursor = document.querySelector('.center-nav .nav-list .nav-cursor');
						
						if (!navList || !navCursor) return;
						
						navItems.forEach(item => {
							item.addEventListener('mouseenter', function() {
								const rect = item.getBoundingClientRect();
								const parentRect = navList.getBoundingClientRect();
								
								navCursor.style.width = rect.width + 'px';
								navCursor.style.left = (rect.left - parentRect.left) + 'px';
								navCursor.style.opacity = '1';
							});
						});
						
						navList.addEventListener('mouseleave', function() {
							navCursor.style.opacity = '0';
						});
					});
				</script>

				<!-- Right Actions -->
				<div class="right-actions d-flex align-items-center">
					<!-- Language Selector -->
					<div class="dropdown language-selector hover-dropdown d-none d-md-block">
						@php $isJa = session('app_locale') == 'ja' || app()->getLocale() == 'ja'; @endphp
						<button class="selector-btn" type="button">
							<span class="fi {{ $isJa ? 'fi-jp' : 'fi-gb' }} selector-ico"></span>
							<span>{{ $isJa ? 'JP' : 'EN' }}</span>
							<svg class="nav-caret" width="10" height="6" viewBox="0 0 10 6" fill="none"><path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</button>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item {{ !$isJa ? 'active' : '' }}" href="{{ route('change.language', 'en') }}"><span class="fi fi-gb dd-icon"></span><span>{{ __('common.language.english') }}</span><i class="fas fa-check dd-check"></i></a></li>
							<li><a class="dropdown-item {{ $isJa ? 'active' : '' }}" href="{{ route('change.language', 'ja') }}"><span class="fi fi-jp dd-icon"></span><span>{{ __('common.language.japanese') }}</span><i class="fas fa-check dd-check"></i></a></li>
						</ul>
					</div>

					<!-- Currency Selector -->
					<div class="dropdown currency-selector hover-dropdown d-none d-lg-block">
						@php
							$currentCurrency = session('currency', 'USD');
							$currencies = Helper::CurrenciesList();
						@endphp
						<button class="selector-btn" type="button">
							<span>{{ Helper::getCurrencySymbol($currentCurrency) }} {{ $currentCurrency }}</span>
							<svg class="nav-caret" width="10" height="6" viewBox="0 0 10 6" fill="none"><path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</button>
						<ul class="dropdown-menu dropdown-menu-end">
							@foreach($currencies as $cur)
								@if($cur->code != 'HKD')
									<li><a class="dropdown-item {{ $currentCurrency == $cur->code ? 'active' : '' }}" href="{{ route('change.currency', $cur->code) }}"><i class="fas fa-coins dd-icon"></i><span>{{ $cur->code }} {{ Helper::getCurrencySymbol($cur->code) }}</span><i class="fas fa-check dd-check"></i></a></li>
								@endif
							@endforeach
						</ul>
					</div>

					<!-- Account Dropdown -->
					<div class="dropdown account-menu hover-dropdown">
						<button class="account-btn" type="button">
							<i class="fas fa-user-circle account-ico"></i>
							@if(Auth::check())<span class="account-name d-none d-md-inline">{{ Str::limit(Auth::user()->name, 12) }}</span>@endif
							<svg class="nav-caret" width="10" height="6" viewBox="0 0 10 6" fill="none"><path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</button>
						<ul class="dropdown-menu dropdown-menu-end account-dropdown">
							@if(Auth::check())
								<li class="account-head">
									<span class="account-head__name">{{ Auth::user()->name }}</span>
									<span class="account-head__credits"><i class="fas fa-coins"></i> {{ Auth::user()->points_balance ?? 0 }} {{ __('common.account.creds') }}</span>
								</li>
								<li><hr class="dropdown-divider"></li>
								<li><a class="dropdown-item" href="{{ route('user') }}"><i class="fas fa-tachometer-alt dd-icon"></i><span>{{ __('common.account.my_account') }}</span></a></li>
								<li><a class="dropdown-item" href="{{ route('points.topup') }}"><i class="fas fa-coins dd-icon"></i><span>{{ __('common.account.points_top_up') }}</span></a></li>
								<li><hr class="dropdown-divider"></li>
								<li><a class="dropdown-item dropdown-item--danger" href="{{ route('user.logout') }}"><i class="fas fa-sign-out-alt dd-icon"></i><span>{{ __('common.account.logout') }}</span></a></li>
							@else
								<li><a class="dropdown-item" href="{{ route('login.form') }}"><i class="fas fa-sign-in-alt dd-icon"></i><span>{{ __('common.account.login') }}</span></a></li>
								<li><hr class="dropdown-divider"></li>
								<li class="account-cta"><a href="{{ route('register.form') }}" class="primary-btn primary-btn--block">{{ __('common.account.register') }}</a></li>
							@endif
						</ul>
					</div>

					<!-- Cart Button -->
					<a href="javascript:void(0)" class="cart-btn modern-cart-btn" aria-label="Shopping cart">
						<i class="fas fa-shopping-bag"></i>
						<span class="cart-badge cart-count">{{ Helper::totalCartQuantity() }}</span>
					</a>

					<!-- Brand Mark Glyph (Far Right Visual Signature) -->
					<div class="brand-glyph-box d-none d-xl-flex ms-3">
						<svg class="brand-glyph" width="28" height="32" viewBox="0 0 28 32" fill="none">
							<path d="M14 0L28 8V24L14 32L0 24V8L14 0Z" fill="#1d1e21"/>
							<path d="M14 6V26" stroke="#fef9f3" stroke-width="2"/>
							<path d="M6 10L22 22" stroke="#fef9f3" stroke-width="2"/>
							<path d="M6 22L22 10" stroke="#fef9f3" stroke-width="2"/>
						</svg>
					</div>
				</div>
			</div>
		</div>
		<!-- Mobile Menu  -->

		<!-- Mobile Menu  -->
		<div class="mobile-menu">
			<div class="menu-backdrop"></div>

			<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
			<nav class="menu-box">
				<div class="upper-box">
					<div class="nav-logo"><a href="{{route('home')}}"><img src="{{url('assets/images/logo.jpg')}}" alt="" title=""></a></div>
					<div class="close-btn"><i class="icon fa fa-times"></i></div>
				</div>

				<ul class="navigation clearfix">
					<!--Keep This Empty / Menu will come through Javascript-->
				</ul>		
			
			</nav>
		</div><!-- End Mobile Menu -->



		<!-- Sticky Header  -->
		<div class="sticky-header">
			<div class="auto-container">
				<div class="inner-container">
					<!--Logo-->
					<div class="logo">
						<a href="{{route('home')}}" title=""><img src="{{url('assets/images/logo.jpg')}}" alt="" title=""></a>
					</div>

					<!--Right Col-->
					<div class="nav-outer">
						<!-- Main Menu -->
						<nav class="main-menu">
							<div class="navbar-collapse show collapse clearfix">
								<ul class="navigation clearfix">
									<!--Keep This Empty / Menu will come through Javascript-->
								</ul>
							</div>
						</nav><!-- Main Menu End-->
                        <div class="ui-btn-outer d-md-none d-xl-none d-lg-none">						
						<a href="javascript:void(0)" class="ui-btn"><i class="lnr-icon-shopping-cart text-light"></i>
					    
                     <span class="cart-count">
                                        @if(Helper::getAllProductFromCart())
                    <span >{{ Helper::totalCartQuantity() }}</span>
                                @else
                                <span class="cart-count">0</span>
                                @endif
                            </span>       
					 
					</a>
					</div>
						<!--Mobile Navigation Toggler-->
						<div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
					</div>
				</div>
			</div>
		</div><!-- End Sticky Menu -->
		  <!-- Offcanvas Area Start -->
        <div class="cartfix-area modern-cart-drawer">
            <div class="cartcanvas__info">
                <div class="offcanvas__wrapper">
                    <div class="cartcanvas__content">
                        <div class="mb-4 d-flex justify-content-between align-items-center border-bottom pb-4" style="border-color: var(--color-stone, #d7d6d4) !important;">
                            <h4 class="fw-800 text-dark mb-0" style="font-family: var(--font-graphik), sans-serif; font-weight: 700; letter-spacing: -0.5px; color: var(--color-ink, #25221e);">{{ __('common.cart.shopping_cart') }}</h4>
                            <div class="cartcanvas__close rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; cursor: pointer;">
                                <i class="fas fa-times" style="font-size: 14px; font-weight: 600;"></i>
                            </div>
                        </div>

                        <ul class="cart-list list-unstyled">
                            @if(Helper::cartCount())
                                @foreach(Helper::getAllProductFromCart() as $key=>$cart)
                                    <li class="d-flex align-items-center mb-4 p-3 rounded-4 bg-white shadow-sm border border-light position-relative">
                                        <a href="{{ route('cart-delete',$cart->id) }}" class="remove-item position-absolute top-0 end-0 m-2 text-danger opacity-50 hover-opacity-100" style="z-index: 5;">
                                            <i class="fas fa-times-circle"></i>
                                        </a>
                                        @php
                                            $item_photo = asset('assets/images/placeholder.jpg');
                                            $item_title = __('common.points_top_up');
                                            $item_link = "#";
                                            $is_course = false;
                                            $level = null;
                                            if($cart->product) {
                                                $photo_arr = array_filter(explode(',', $cart->product->photo ?? ''));
                                                if(!empty($photo_arr)) {
                                                    $item_photo = asset(trim(reset($photo_arr)));
                                                }
                                                $item_title = $cart->product->title;
                                                $item_link = route('product-detail', $cart->product->slug);

                                                // Check if this is a course (product_id < 1000)
                                                if($cart->product_id < 1000) {
                                                    $is_course = true;
                                                    // Look up level by matching course_id and price_in_points
                                                    $level = \App\Models\ProductLevel::where('course_id', $cart->product_id)
                                                                 ->where('price_in_points', $cart->points)
                                                                 ->first();
                                                }
                                            }
                                        @endphp

                                        @if($is_course)
                                            <div class="cart-thumb flex-shrink-0 me-3">
                                                <img src="{{ $item_photo }}" alt="{{ $item_title }}" onerror="this.src='{{ asset('assets/images/placeholder.jpg') }}'">
                                            </div>
                                        @else
                                            <div class="cart-thumb cart-thumb--credits flex-shrink-0 me-3">
                                                <i class="fas fa-coins"></i>
                                            </div>
                                        @endif

                                        <div class="cart-info flex-grow-1 pe-4">
                                            <a href="{{ $item_link }}" class="fw-bold text-dark text-decoration-none small d-block mb-1">{{ $item_title }}</a>

                                            <!-- Level Badge (for courses only) -->
                                            @if($is_course && $level)
                                                <span class="badge rounded-2 px-2 py-1 me-2" style="background: var(--color-sky-wash, #dceaff); color: var(--color-teal-dusk, #497d7e); font-size: 11px; font-weight: 700; display: inline-block; margin-bottom: 6px; border: 1px solid rgba(73, 125, 126, 0.15);">
                                                    <i class="fas fa-level-up-alt me-1" style="font-size: 10px;"></i>{{ $level->skill_level }}
                                                </span>
                                            @endif

                                            <p class="mb-0 small text-muted">
                                                <span class="fw-bold" style="color: var(--color-ember-red, #e34432);">{{ $cart->quantity }}</span> x 
                                                @if($cart->product_id < 1000 && $cart->points > 0)
                                                    <span class="db-points-badge--amber"><i class="fas fa-coins me-1"></i>{{ number_format($cart->points) }} {{ __('common.account.creds') }}</span>
                                                @elseif($cart->product_id >= 1000)
                                                    <span style="font-weight: 700; color: var(--color-ink, #25221e);">{{ Helper::getCurrencySymbol(session('currency')) }}{{ number_format($cart['price'], session('currency')=='JPY' ? 0 : 2) }}</span>
                                                    <span class="small ms-1" style="color: var(--color-teal-dusk, #497d7e); font-weight: 600;">({{ number_format($cart->points) }} {{ __('common.account.creds') }})</span>
                                                @else
                                                    <span style="font-weight: 700; color: var(--color-ink, #25221e);">{{ Helper::getCurrencySymbol(session('currency')) }}{{ number_format($cart['price'], session('currency')=='JPY' ? 0 : 2) }}</span>
                                                @endif
                                            </p>
                                        </div>
                                    </li>
                                @endforeach
                            @else
                                <li class="text-center py-5">
                                    <div class="opacity-20 mb-3"><i class="fas fa-shopping-basket fa-4x"></i></div>
                                    <p class="text-muted fw-bold">{{ __('common.cart.no_cart_available') }}</p>
                                    <a href="{{route('product-lists')}}" class="modern-btn modern-btn-outline small py-2">{{ __('common.header.catalog') }}</a>
                                </li>
                            @endif
                        </ul>

                        @if(Helper::cartCount())
                            @php
                                $total_amount = Helper::totalCartPrice();
                                if(session()->has('coupon')) { $total_amount -= Session::get('coupon')['value']; }

                                // Detect cart type
                                $has_courses = false;
                                $has_topups = false;
                                foreach(Helper::getAllProductFromCart() as $item) {
                                    if($item->product_id < 1000) {
                                        $has_courses = true;
                                    } else if($item->product_id >= 1000) {
                                        $has_topups = true;
                                    }
                                }
                            @endphp
                            <div class="cart-footer border-top mt-5 pt-4" style="border-color: var(--color-stone, #d7d6d4) !important;">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h5 class="fw-bold text-dark mb-0" style="font-family: var(--font-inter), sans-serif; font-weight: 700; color: var(--color-pencil, #6f6c69);">{{ __('common.cart.total') }}:</h5>
                                    <h4 class="fw-800 mb-0" style="font-family: var(--font-graphik), sans-serif; font-weight: 800; color: var(--color-ember-red, #e34432);">
                                        @if(Helper::totalCartPoints() > 0)
                                            <i class="fas fa-coins me-1"></i> {{ number_format(Helper::totalCartPoints()) }} {{ __('common.account.creds') }}
                                        @else
                                            {{ Helper::getCurrencySymbol(session('currency')) }}{{ number_format($total_amount, session('currency')=='JPY' ? 0 : 2) }}
                                        @endif
                                    </h4>
                                </div>
                                <div class="cart-drawer-btns d-flex gap-2 w-100">
                                    @if($has_courses && !$has_topups)
                                        <!-- Courses Only -->
                                        <a href="{{ route('coursecart') }}" class="modern-btn modern-btn-outline text-center py-2 px-3 flex-grow-1" style="background: transparent; border: 1.5px solid var(--color-stone, #d7d6d4); color: var(--color-pencil, #6f6c69); border-radius: 10px; font-weight: 700; font-size: 13px; transition: all 0.25s ease;">{{ __('common.cart.view_cart') }}</a>
                                        <button type="button" onclick="document.getElementById('redeemPointsForm').submit();" class="modern-btn modern-btn-solid text-center py-2 px-3 flex-grow-1" style="background: var(--color-ember-red, #e34432); color: white; border: none; border-radius: 10px; font-weight: 700; font-size: 13px; transition: all 0.25s ease; box-shadow: 0 4px 12px rgba(227, 68, 50, 0.15); cursor: pointer;">
                                            <i class="fas fa-lock me-1"></i>{{ __('common.cart.redeem_points') }}
                                        </button>
                                        <form id="redeemPointsForm" action="{{ route('points.redeem') }}" method="POST" style="display:none;">
                                            @csrf
                                        </form>
                                    @elseif($has_topups && !$has_courses)
                                        <!-- Top-ups Only -->
                                        <a href="{{ route('cart') }}" class="modern-btn modern-btn-outline text-center py-2 px-3 flex-grow-1" style="background: transparent; border: 1.5px solid var(--color-stone, #d7d6d4); color: var(--color-pencil, #6f6c69); border-radius: 10px; font-weight: 700; font-size: 13px; transition: all 0.25s ease;">{{ __('common.cart.view_cart') }}</a>
                                        <a href="{{ Auth::check() ? route('checkout') : route('login.form') }}" class="modern-btn modern-btn-solid text-center py-2 px-3 flex-grow-1" style="background: var(--color-ember-red, #e34432); color: white; border: none; border-radius: 10px; font-weight: 700; font-size: 13px; transition: all 0.25s ease; box-shadow: 0 4px 12px rgba(227, 68, 50, 0.15);">{{ __('common.cart.checkout') }}</a>
                                    @else
                                        <!-- Mixed: Courses + Top-ups -->
                                        <a href="{{ route('coursecart') }}" class="modern-btn modern-btn-outline text-center py-2 px-3 flex-grow-1" style="background: transparent; border: 1.5px solid var(--color-stone, #d7d6d4); color: var(--color-pencil, #6f6c69); border-radius: 10px; font-weight: 700; font-size: 13px; transition: all 0.25s ease;">{{ __('common.cart.view_cart') }}</a>
                                    @endif
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
             <!-- Offcanvas Area Start -->
			 <div class="offcanvas__overlay"></div>
	</header>
@cookieconsentview
        {{-- Flash notification toasts (themed component) --}}
        <x-flash-notification />
	<!--End Main Header -->

<!-- Preloader Hide Script -->
<script>
(function() {
	const preloader = document.getElementById('preloader');
	if (!preloader) return;

	// Hide preloader when page is fully loaded
	window.addEventListener('load', function() {
		setTimeout(function() {
			preloader.classList.add('hidden');
		}, 2300); // Slightly before animation completes (2.5s)
	});

	// Fallback: hide after timeout even if load event doesn't fire
	setTimeout(function() {
		if (preloader && !preloader.classList.contains('hidden')) {
			preloader.classList.add('hidden');
		}
	}, 5000);
})();
</script>
