<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Home Bro</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;500;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --accent: #00f2fe;
            --accent-2: #4facfe;
            --text-main: #ffffff;
            --text-dim: #94a3b8;
            --card-bg: rgba(255, 255, 255, 0.03);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Outfit', sans-serif;
            background: #05070a;
            color: var(--text-main);
            height: 100vh;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Complex Realistic Background */
        .bg-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }

        .orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(120px);
            opacity: 0.5;
            animation: float 20s infinite alternate;
        }

        .orb-1 {
            width: 600px;
            height: 600px;
            background: linear-gradient(var(--accent), #7000ff);
            top: -200px;
            left: -100px;
        }

        .orb-2 {
            width: 500px;
            height: 500px;
            background: linear-gradient(#ff0080, #7928ca);
            bottom: -150px;
            right: -50px;
            animation-delay: -5s;
        }

        @keyframes float {
            0% { transform: translate(0, 0) scale(1); }
            50% { transform: translate(100px, 50px) scale(1.1); }
            100% { transform: translate(-50px, 100px) scale(0.9); }
        }

        /* Main Glass Container */
        .glass-shell {
            position: relative;
            width: 90%;
            max-width: 1000px;
            background: rgba(255, 255, 255, 0.02);
            backdrop-filter: blur(30px);
            -webkit-backdrop-filter: blur(30px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 40px;
            padding: 60px;
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 40px;
            box-shadow: 0 40px 100px rgba(0,0,0,0.8);
        }

        /* Left Side: Hero Content */
        .hero-section {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            background: rgba(0, 242, 254, 0.1);
            color: var(--accent);
            padding: 8px 16px;
            border-radius: 100px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 24px;
            width: fit-content;
            border: 1px solid rgba(0, 242, 254, 0.2);
        }

        .status-dot {
            width: 8px;
            height: 8px;
            background: var(--accent);
            border-radius: 50%;
            margin-right: 8px;
            box-shadow: 0 0 10px var(--accent);
            animation: pulse 2s infinite;
        }

        h1 {
            font-size: 4rem;
            line-height: 1;
            margin-bottom: 20px;
            background: linear-gradient(to bottom right, #fff 50%, #64748b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        p {
            font-size: 1.2rem;
            color: var(--text-dim);
            line-height: 1.6;
            margin-bottom: 30px;
        }

        /* Right Side: Visual Bento Box */
        .visual-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        .bento-item {
            background: var(--card-bg);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 20px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            transition: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .bento-item:hover {
            background: rgba(255, 255, 255, 0.08);
            transform: scale(1.05);
        }

        .bento-item.large {
            grid-column: span 2;
            height: 140px;
        }

        .bento-icon {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .bento-label {
            font-size: 0.75rem;
            color: var(--text-dim);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        @keyframes pulse {
            0% { opacity: 1; }
            50% { opacity: 0.4; }
            100% { opacity: 1; }
        }

        /* Responsive */
        @media (max-width: 850px) {
            .glass-shell {
                grid-template-columns: 1fr;
                padding: 40px;
                text-align: center;
            }
            .status-badge { margin: 0 auto 20px; }
            h1 { font-size: 2.8rem; }
        }
    </style>
</head>
<body>

    <div class="bg-wrapper">
        <div class="orb orb-1"></div>
        <div class="orb orb-2"></div>
    </div>

    <main class="glass-shell">
        <div class="hero-section">
            <div class="status-badge">
                <span class="status-dot"></span>
                SYSTEMS ONLINEsss
            </div>
            <h1>Welcome <br>Home, Bro.</h1>
            <p>Everything is synced and secured. Your digital space is ready for action. Have a great session today!</p>
            
            <div style="font-size: 0.9rem; color: var(--accent); font-weight: 500;">
                MARCH 2026 &bull; LOGGED IN SUCCESSFULLY
            </div>
        </div>

        <div class="visual-grid">
            <div class="bento-item">
                <div class="bento-icon">⚡</div>
                <div class="bento-label">Fast Access</div>
            </div>
            <div class="bento-item">
                <div class="bento-icon">🛡️</div>
                <div class="bento-label">Secured</div>
            </div>
            <div class="bento-item large">
                <div class="bento-icon">✨</div>
                <div class="bento-label">Realistic UI v2.0</div>
                <div style="font-size: 0.8rem; margin-top: 5px;">Smooth Experience Enabled</div>
            </div>
        </div>
    </main>

</body>
</html>