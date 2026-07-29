<?php
defined('BASEPATH') or exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sitaguhh — Selamat Datang</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
	<style>
		*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

		:root {
			--bg-1: #0f0c29;
			--bg-2: #302b63;
			--bg-3: #24243e;
			--accent: #7c3aed;
			--accent-light: #a78bfa;
			--accent-glow: rgba(124, 58, 237, 0.45);
			--cyan: #22d3ee;
			--text: #f8fafc;
			--text-muted: #94a3b8;
			--glass: rgba(255, 255, 255, 0.06);
			--glass-border: rgba(255, 255, 255, 0.12);
			--radius: 16px;
		}

		html { scroll-behavior: smooth; }

		body {
			font-family: 'Inter', system-ui, -apple-system, sans-serif;
			background: var(--bg-1);
			color: var(--text);
			min-height: 100vh;
			overflow-x: hidden;
			line-height: 1.6;
		}

		/* Animated background */
		.bg {
			position: fixed;
			inset: 0;
			z-index: 0;
			background: linear-gradient(135deg, var(--bg-1) 0%, var(--bg-2) 50%, var(--bg-3) 100%);
		}

		.bg::before,
		.bg::after {
			content: '';
			position: absolute;
			border-radius: 50%;
			filter: blur(80px);
			animation: float 12s ease-in-out infinite;
		}

		.bg::before {
			width: 520px;
			height: 520px;
			background: var(--accent-glow);
			top: -120px;
			right: -80px;
		}

		.bg::after {
			width: 420px;
			height: 420px;
			background: rgba(34, 211, 238, 0.18);
			bottom: -100px;
			left: -60px;
			animation-delay: -6s;
		}

		.orb {
			position: fixed;
			border-radius: 50%;
			filter: blur(60px);
			pointer-events: none;
			z-index: 0;
		}

		.orb-1 {
			width: 300px;
			height: 300px;
			background: rgba(167, 139, 250, 0.15);
			top: 40%;
			left: 50%;
			transform: translate(-50%, -50%);
			animation: pulse 8s ease-in-out infinite;
		}

		@keyframes float {
			0%, 100% { transform: translate(0, 0) scale(1); }
			33% { transform: translate(30px, -40px) scale(1.05); }
			66% { transform: translate(-20px, 20px) scale(0.95); }
		}

		@keyframes pulse {
			0%, 100% { opacity: 0.6; transform: translate(-50%, -50%) scale(1); }
			50% { opacity: 1; transform: translate(-50%, -50%) scale(1.15); }
		}

		@keyframes fadeUp {
			from { opacity: 0; transform: translateY(24px); }
			to { opacity: 1; transform: translateY(0); }
		}

		@keyframes shimmer {
			0% { background-position: -200% center; }
			100% { background-position: 200% center; }
		}

		/* Layout */
		.page {
			position: relative;
			z-index: 1;
			max-width: 1100px;
			margin: 0 auto;
			padding: 48px 24px 32px;
		}

		/* Nav */
		.nav {
			display: flex;
			align-items: center;
			justify-content: space-between;
			margin-bottom: 64px;
			animation: fadeUp 0.7s ease both;
		}

		.logo {
			display: flex;
			align-items: center;
			gap: 12px;
			font-weight: 800;
			font-size: 1.25rem;
			letter-spacing: -0.02em;
		}

		.logo-icon {
			width: 40px;
			height: 40px;
			border-radius: 12px;
			background: linear-gradient(135deg, var(--accent), var(--cyan));
			display: grid;
			place-items: center;
			font-size: 1.1rem;
			box-shadow: 0 4px 20px var(--accent-glow);
		}

		.badge {
			font-size: 0.75rem;
			font-weight: 600;
			padding: 6px 14px;
			border-radius: 999px;
			background: var(--glass);
			border: 1px solid var(--glass-border);
			color: var(--accent-light);
			backdrop-filter: blur(12px);
		}

		/* Hero */
		.hero {
			text-align: center;
			margin-bottom: 56px;
			animation: fadeUp 0.7s 0.1s ease both;
		}

		.hero-tag {
			display: inline-flex;
			align-items: center;
			gap: 8px;
			font-size: 0.8125rem;
			font-weight: 600;
			color: var(--cyan);
			background: rgba(34, 211, 238, 0.08);
			border: 1px solid rgba(34, 211, 238, 0.2);
			padding: 8px 16px;
			border-radius: 999px;
			margin-bottom: 24px;
		}

		.hero-tag span {
			width: 8px;
			height: 8px;
			border-radius: 50%;
			background: var(--cyan);
			box-shadow: 0 0 12px var(--cyan);
			animation: pulse 2s ease-in-out infinite;
		}

		.hero h1 {
			font-size: clamp(2.25rem, 6vw, 3.75rem);
			font-weight: 800;
			line-height: 1.1;
			letter-spacing: -0.03em;
			margin-bottom: 20px;
		}

		.hero h1 .gradient {
			background: linear-gradient(90deg, var(--accent-light), var(--cyan), var(--accent-light));
			background-size: 200% auto;
			-webkit-background-clip: text;
			-webkit-text-fill-color: transparent;
			background-clip: text;
			animation: shimmer 4s linear infinite;
		}

		.hero p {
			font-size: 1.125rem;
			color: var(--text-muted);
			max-width: 560px;
			margin: 0 auto 36px;
		}

		.hero-actions {
			display: flex;
			flex-wrap: wrap;
			gap: 12px;
			justify-content: center;
		}

		.btn {
			display: inline-flex;
			align-items: center;
			gap: 8px;
			padding: 14px 28px;
			border-radius: 12px;
			font-size: 0.9375rem;
			font-weight: 600;
			text-decoration: none;
			transition: transform 0.2s, box-shadow 0.2s;
		}

		.btn:hover { transform: translateY(-2px); }

		.btn-primary {
			background: linear-gradient(135deg, var(--accent), #6d28d9);
			color: #fff;
			box-shadow: 0 8px 32px var(--accent-glow);
		}

		.btn-primary:hover {
			box-shadow: 0 12px 40px var(--accent-glow);
		}

		.btn-ghost {
			background: var(--glass);
			border: 1px solid var(--glass-border);
			color: var(--text);
			backdrop-filter: blur(12px);
		}

		.btn-ghost:hover {
			border-color: rgba(255, 255, 255, 0.25);
			background: rgba(255, 255, 255, 0.1);
		}

		/* Cards grid */
		.cards {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
			gap: 20px;
			margin-bottom: 48px;
		}

		.card {
			background: var(--glass);
			border: 1px solid var(--glass-border);
			border-radius: var(--radius);
			padding: 28px;
			backdrop-filter: blur(16px);
			transition: transform 0.25s, border-color 0.25s, box-shadow 0.25s;
			animation: fadeUp 0.7s ease both;
		}

		.card:nth-child(1) { animation-delay: 0.2s; }
		.card:nth-child(2) { animation-delay: 0.3s; }
		.card:nth-child(3) { animation-delay: 0.4s; }

		.card:hover {
			transform: translateY(-4px);
			border-color: rgba(167, 139, 250, 0.35);
			box-shadow: 0 16px 48px rgba(0, 0, 0, 0.3);
		}

		.card-icon {
			width: 48px;
			height: 48px;
			border-radius: 12px;
			display: grid;
			place-items: center;
			font-size: 1.4rem;
			margin-bottom: 16px;
		}

		.card-icon.purple { background: rgba(124, 58, 237, 0.2); }
		.card-icon.cyan { background: rgba(34, 211, 238, 0.15); }
		.card-icon.pink { background: rgba(236, 72, 153, 0.15); }

		.card h3 {
			font-size: 1.0625rem;
			font-weight: 700;
			margin-bottom: 8px;
			letter-spacing: -0.01em;
		}

		.card p {
			font-size: 0.875rem;
			color: var(--text-muted);
			line-height: 1.55;
		}

		.card code {
			display: block;
			margin-top: 12px;
			padding: 10px 14px;
			background: rgba(0, 0, 0, 0.35);
			border: 1px solid rgba(255, 255, 255, 0.08);
			border-radius: 8px;
			font-family: 'Consolas', 'Monaco', monospace;
			font-size: 0.75rem;
			color: var(--accent-light);
			word-break: break-all;
		}

		/* Info bar */
		.info-bar {
			display: flex;
			flex-wrap: wrap;
			align-items: center;
			justify-content: space-between;
			gap: 16px;
			padding: 20px 24px;
			background: var(--glass);
			border: 1px solid var(--glass-border);
			border-radius: var(--radius);
			backdrop-filter: blur(16px);
			animation: fadeUp 0.7s 0.5s ease both;
		}

		.info-items {
			display: flex;
			flex-wrap: wrap;
			gap: 24px;
		}

		.info-item {
			display: flex;
			flex-direction: column;
			gap: 2px;
		}

		.info-label {
			font-size: 0.6875rem;
			font-weight: 600;
			text-transform: uppercase;
			letter-spacing: 0.06em;
			color: var(--text-muted);
		}

		.info-value {
			font-size: 0.875rem;
			font-weight: 600;
			color: var(--text);
		}

		.info-value.highlight { color: var(--cyan); }

		.footer {
			text-align: center;
			margin-top: 40px;
			padding-top: 24px;
			border-top: 1px solid var(--glass-border);
			font-size: 0.8125rem;
			color: var(--text-muted);
			animation: fadeUp 0.7s 0.6s ease both;
		}

		.footer strong { color: var(--accent-light); font-weight: 600; }

		@media (max-width: 640px) {
			.page { padding: 32px 16px 24px; }
			.nav { margin-bottom: 40px; }
			.hero { margin-bottom: 40px; }
			.info-bar { flex-direction: column; align-items: flex-start; }
		}
	</style>
</head>
<body>

<div class="bg"></div>
<div class="orb orb-1"></div>

<div class="page">
	<nav class="nav">
		<div class="logo">
			<div class="logo-icon">⚡</div>
			Sitaguhh
		</div>
		<span class="badge">CodeIgniter <?php echo CI_VERSION; ?></span>
	</nav>

	<section class="hero">
		<div class="hero-tag">
			<span></span>
			Sistem siap digunakan
		</div>
		<h1>
			Selamat Datang di<br>
			<span class="gradient">Sitaguhh</span>
		</h1>
		<p>
			Aplikasi web modern berbasis CodeIgniter HMVC.
			Cepat, modular, dan siap dikembangkan sesuai kebutuhan Anda.
		</p>
		<div class="hero-actions">
			<a href="<?php echo base_url('user_guide/'); ?>" class="btn btn-primary">
				📖 Panduan Pengguna
			</a>
			<a href="#info" class="btn btn-ghost">
				Lihat Detail →
			</a>
		</div>
	</section>

	<div class="cards">
		<div class="card">
			<div class="card-icon purple">🏗️</div>
			<h3>Arsitektur HMVC</h3>
			<p>Struktur modular yang memudahkan pengembangan fitur secara terpisah dan terorganisir.</p>
			<code>application/modules/</code>
		</div>
		<div class="card">
			<div class="card-icon cyan">⚙️</div>
			<h3>Controller</h3>
			<p>Logika aplikasi dikelola melalui controller modular yang fleksibel dan reusable.</p>
			<code>welcome/controllers/Welcome.php</code>
		</div>
		<div class="card">
			<div class="card-icon pink">🎨</div>
			<h3>View</h3>
			<p>Halaman ini dapat Anda sesuaikan langsung di file view berikut.</p>
			<code>welcome/views/welcome_message.php</code>
		</div>
	</div>

	<div class="info-bar" id="info">
		<div class="info-items">
			<div class="info-item">
				<span class="info-label">Base URL</span>
				<span class="info-value highlight"><?php echo base_url(); ?></span>
			</div>
			<div class="info-item">
				<span class="info-label">Environment</span>
				<span class="info-value"><?php echo ENVIRONMENT; ?></span>
			</div>
			<div class="info-item">
				<span class="info-label">Render Time</span>
				<span class="info-value">{elapsed_time}s</span>
			</div>
		</div>
	</div>

	<p class="footer">
		Dibuat dengan <strong>CodeIgniter <?php echo CI_VERSION; ?></strong>
		<?php if (ENVIRONMENT === 'development') : ?>
			· Mode Pengembangan
		<?php endif; ?>
	</p>
</div>

</body>
</html>
