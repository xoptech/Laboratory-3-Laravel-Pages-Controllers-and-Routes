<head>
	<title>About Me</title>
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
			<h1>About</h1>
			<h1 class="secondary-header">Me</h1>
			<p>I love being lazy. It is my favorite quality. I do not like to waste my energy on things that do not
				matter. In 2026, work looks different. It is not about how many hours you spend typing. It is about how
				well you can think.</p>

			<p>I know how to code the basics. I understand how the machine works. It is stupid to let the AI do
				everything if you do not know the rules. You must know the basics so you can see the mistakes. I am a
				skeptic and I check every line the AI makes.</p>

			<p>The human brain is not designed to sit in a chair all day. It is not designed to stare at a screen for a
				dying career. Our bodies need to be healthy. I use AI so I can focus on my health instead. I want to
				have a long life with no stress.</p>

			<p>I believe in hard work, but I do not want to work hard on code. The AI is there to do that for me. I let
				the machine be the hands while I stay as the brain. I tell the AI what I want. Then the AI builds it
				through me. This is the smart way to build.</p>

			<p>This path lets me focus on things that are worth it. I want to spend my time with my family. I want to
				work harder on myself instead of on a script. I do not want to waste my life at a desk. I want to be a
				better person, not a faster coder.</p>

			<p>I spend my time checking the work. I use my knowledge of the basics to find errors. This takes much less
				effort than writing every line from scratch. It saves my energy for the people I love.</p>

			<p>My goal is to automate every small task. I want to remove every chore from my day. I keep doing this
				until there is no work left. Then my only task is picking a show to binge-watch with my family. It is
				good for my body to rest and be happy.</p>

			<p>Some people say the grind is a badge of honor. I do not want that badge. I prefer efficiency through
				avoidance. I avoid the hard path so I can stay well. I use my brain to find the easiest way. This is how
				I stay happy and present for the things that matter.</p>
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