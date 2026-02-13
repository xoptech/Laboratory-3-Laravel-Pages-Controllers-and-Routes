<head>
	<title>Projects</title>
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
			<h1>Recent</h1>
			<h1 class="secondary-header">Projects</h1>

			<p>I have not made any real projects yet. I am in a beautiful phase right now. I tell people I am a
				developer. But mostly I just watch the AI do the work while I stay comfortable.</p>

			<p>I have only built this portfolio so far. I have a few other ideas that are half-finished. I stopped
				working on them the moment they required actual effort. That is the goal for me.</p>

			<p>One day I will finish something. It will be very simple and very useful. Other developers will wonder why
				they did not think of it first. I will not hear them because I will be back on my couch.</p>

			<p>I am being real with you in this section. There are no fake projects here. There is no fake grind. This
				is just pure laziness. I am not hiding it.</p>

			<p>You can come back in a few months if you want. Or you can stay away. I will probably still be right here.
				I will be letting the machines do the cooking for me.</p>
		</div>
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