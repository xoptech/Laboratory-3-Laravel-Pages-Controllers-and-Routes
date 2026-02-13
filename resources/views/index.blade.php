<head>
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
	<header>
		<nav>
			<ul>
				<li>
					<a href=" {{ route('home') }} ">
						<div class="icon-wrapper">
							<span class="material-symbols-outlined">home</span>
							<span class="hover-label">Home</span>
						</div>
					</a>
				</li>
				<li>
					<a href=" {{ route('project') }} ">
						<div class="icon-wrapper">
							<span class="material-symbols-outlined">folder</span>
							<span class="hover-label">Projects</span>
						</div>
					</a>
				</li>
				<li>
					<a href=" {{ route('about') }} ">
						<div class="icon-wrapper">
							<span class="material-symbols-outlined">info</span>
							<span class="hover-label">About Me</span>
						</div>
					</a>
				</li>
				<li>
					<button id="theme-toggle" class="theme-toggle">
						<div class="icon-wrapper">
							<span class="material-symbols-outlined">light_mode</span>
							<span class="hover-label">Toggle Theme</span>
						</div>
					</button>
				</li>
			</ul>
		</nav>
	</header>

	<main>
		<div class="card">
			<img src="{{ asset('image.jpg') }}">
			<h3>John Doe</h3>
			<p>
				An aspiring developer who is lazy to work with anything.
			</p>
		</div>
		<div class="card content-card">
			<h1>Aspiring</h1>
			<h1 class="secondary-header">Developer</h1>
			<p>This is my small corner of the internet. I do not code for ten hours a day. I do not chase every new
				trend. I just use AI to do the boring parts. This lets me live like a human being.</p>

			<p>I built everything here with the least effort possible. That is not a mistake. That is the entire point.
				If it looks good and it works, I am happy. I do not like to work on things for more than one afternoon.
			</p>

			<p>This is the future of work for me. There is no stress here. There is no burnout. I just use smart
				shortcuts and keep the vibes good. This is my version of success.</p>

			<p>You can look around if you want. The About page explains my lazy philosophy. The Projects page is honest
				about what I have done. Come back anytime. I am not going anywhere.</p>
		</div>
	</main>
	<div class="floating-badge">
		<p>I just made this</p>
		<p>(my name is not mine...)</p>
		<p>-Samuel Binos</p>
	</div>
	<footer>
		<p>Made with AI <span id="current-year">i</span></p>
	</footer>
	<script src="{{ asset('js/script.js') }}"></script>
</body>