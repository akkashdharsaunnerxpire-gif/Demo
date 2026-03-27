<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <title>MyBook — Professional Social Dashboard</title>
  <link rel="stylesheet" href="index.css"/>
</head>
<body>

<!-- Premium Navbar -->
<nav class="navbar">
  <h1>📘 MyBook</h1>
  <div class="nav-links">
    <a href="#">Home</a>
    <a href="#">About</a>
    <a href="#">Contact</a>
  </div>
</nav>

        <form class="login-box" id="loginForm">
            <h2>Welcome Back 👋</h2>
            <p class="subtitle">Login to continue</p>

  <!-- Professional Sidebar with enriched menu icons & active tracking -->
  <aside class="sidebar">
    <ul>
      <li data-menu="feed" onclick="showContent('feed', this)">🏠 Feed</li>
      <li data-menu="friends" onclick="showContent('friends', this)">👥 Friends</li>
      <li data-menu="videos" onclick="showContent('videos', this)">📺 Videos</li>
      <li data-menu="market" onclick="showContent('market', this)">🛒 Marketplace</li>
      <li data-menu="settings" onclick="showContent('settings', this)">⚙️ Settings</li>
      <li data-menu="gaming" onclick="showContent('gaming', this)">🎮 Gaming</li>
      <li data-menu="memories" onclick="showContent('memories', this)">⏳ Memories</li>
      <li data-menu="events" onclick="showContent('events', this)">📅 Events</li>
    </ul>
  </aside>

  <!-- Content Section -->
  <section class="content">
    <!-- Premium Login Card -->
    <div class="login-box" id="loginBox">
      <h2>🔐 Welcome Back</h2>
      <form id="loginForm">
        <input type="email" id="email" placeholder="Email address" required>
        <input type="password" id="password" placeholder="Password" required>
        <button type="submit">Log In</button>
        <a href="#" class="forgot">Forgotten password?</a>
        <hr>
        <button type="button" class="create">Create New Account</button>
      </form>
      <p style="font-size: 12px; text-align: center; margin-top: 20px; color: #7c8b9f;">
        <strong>Demo Access:</strong> akkash@gmail.com / 123
      </p>
    </div>

    <!-- Dashboard after login -->
    <div class="dashboard" id="dashboard" style="display:none;">
      <h2 id="title">🌟 Welcome back!</h2>
      <p id="contentText">Select any option from the professional sidebar to explore rich content.</p>
      <div id="dynamicRichArea" class="extra-rich"></div>
    </div>
  </section>
</div>
<script>
  // DOM Elements
  const loginForm = document.getElementById("loginForm");
  const loginBox = document.getElementById("loginBox");
  const dashboard = document.getElementById("dashboard");
  const titleEl = document.getElementById("title");
  const textEl = document.getElementById("contentText");
  const richArea = document.getElementById("dynamicRichArea");

  // Track active menu item for professional styling
  let currentActiveMenuItem = null;

  function setActiveMenuItem(element) {
    // Remove active class from all sidebar items
    const allMenuItems = document.querySelectorAll('.sidebar li');
    allMenuItems.forEach(item => {
      item.classList.remove('active-menu');
    });
    // Add active class to clicked item
    if (element) {
      element.classList.add('active-menu');
      currentActiveMenuItem = element;
    }
  }

  // Rich content generator for each menu
  function updateRichContent(type) {
    if (!richArea) return;
    richArea.innerHTML = "";

    const richData = {
      feed: {
        cards: [
          { emoji: "📸", label: "Latest Photos", desc: "Your friend shared 3 pics" },
          { emoji: "📰", label: "Tech News", desc: "AI breakthrough 2025" },
          { emoji: "🎉", label: "Trending Now", desc: "#MyBookVibes" },
          { emoji: "💬", label: "Poll", desc: "What's on your mind?" }
        ]
      },
      friends: {
        cards: [
          { emoji: "👤", label: "Akkash", desc: "Online · 3 mutual friends" },
          { emoji: "👩‍💻", label: "Divya S.", desc: "Software Engineer" },
          { emoji: "🤝", label: "Suggestions", desc: "+12 new recommendations" },
          { emoji: "🎂", label: "Birthdays", desc: "2 friends today" }
        ]
      },
      videos: {
        cards: [
          { emoji: "🎬", label: "Reels", desc: "Trending now · 2.1M views" },
          { emoji: "📺", label: "Live Streams", desc: "Gaming tournament" },
          { emoji: "🎥", label: "Watch Later", desc: "Save your favorites" },
          { emoji: "🏆", label: "Top Creators", desc: "Weekly highlights" }
        ]
      },
      market: {
        cards: [
          { emoji: "🛍️", label: "Electronics", desc: "Up to 40% off" },
          { emoji: "📱", label: "Mobiles", desc: "iPhone 15 & Samsung" },
          { emoji: "🪑", label: "Home & Living", desc: "Local deals" },
          { emoji: "🚗", label: "Vehicles", desc: "Certified used cars" }
        ]
      },
      settings: {
        cards: [
          { emoji: "🔒", label: "Privacy Center", desc: "Take control" },
          { emoji: "🎨", label: "Theme & Display", desc: "Dark/Light mode" },
          { emoji: "🔔", label: "Notifications", desc: "Customize alerts" },
          { emoji: "⚡", label: "Security", desc: "2FA & login alerts" }
        ]
      },
      gaming: {
        cards: [
          { emoji: "🎮", label: "Cloud Gaming", desc: "Play instantly" },
          { emoji: "🏆", label: "Leaderboard", desc: "Rank #124" },
          { emoji: "🕹️", label: "Live Tournaments", desc: "Join now" },
          { emoji: "👾", label: "Arcade Classics", desc: "Retro games" }
        ]
      },
      memories: {
        cards: [
          { emoji: "📅", label: "On This Day", desc: "4 years ago" },
          { emoji: "📷", label: "Summer Trip 2024", desc: "Beach memories" },
          { emoji: "❤️", label: "Top Moments", desc: "Relive joy" },
          { emoji: "🎞️", label: "Video Flashback", desc: "Best times" }
        ]
      },
      events: {
        cards: [
          { emoji: "🎉", label: "Tech Conference", desc: "Tomorrow 6PM" },
          { emoji: "🎨", label: "Art Expo", desc: "This weekend" },
          { emoji: "🏃", label: "Charity Run", desc: "Register now" },
          { emoji: "🎵", label: "Live Concert", desc: "Limited tickets" }
        ]
      }
    };

    const data = richData[type] || {
      cards: [
        { emoji: "✨", label: "Explore", desc: "Discover new features" },
        { emoji: "⭐", label: "Premium", desc: "Unlock exclusive" }
      ]
    };

    data.cards.forEach(card => {
      const cardDiv = document.createElement("div");
      cardDiv.className = "rich-card";
      cardDiv.innerHTML = `
        <div style="font-size: 2rem; margin-bottom: 10px;">${card.emoji}</div>
        <div style="font-weight: 700; margin-bottom: 6px; font-size: 1rem;">${card.label}</div>
        <div style="font-size: 0.8rem; color: #6c7a8e;">${card.desc}</div>
      `;
      richArea.appendChild(cardDiv);
    });
  }

  // Main content switcher with professional sidebar highlighting
  window.showContent = function(type, clickedElement) {
    if (dashboard.style.display !== "block") return;

    // Update active menu styling
    if (clickedElement) {
      setActiveMenuItem(clickedElement);
    } else {
      // fallback: find by data attribute
      const targetItem = document.querySelector(`.sidebar li[data-menu="${type}"]`);
      if (targetItem) setActiveMenuItem(targetItem);
    }

    const contentMap = {
      feed: { title: "📰 Feed", text: "Stay updated with the latest posts, stories, and moments from your network." },
      friends: { title: "👥 Friends", text: "Connect with people you know. View active friends, requests, and suggestions." },
      videos: { title: "📺 Videos", text: "Discover trending reels, exclusive content, and live streams from creators worldwide." },
      market: { title: "🛒 Marketplace", text: "Buy & sell items locally. Explore electronics, furniture, vehicles and more." },
      settings: { title: "⚙️ Settings & Privacy", text: "Manage account preferences, security, notifications, and profile customization." },
      gaming: { title: "🎮 Gaming Hub", text: "Play instant games, compete with friends, and track your achievements." },
      memories: { title: "⏳ Memories", text: "Relive special moments with on-this-day posts and nostalgic highlights." },
      events: { title: "📅 Events", text: "Find local events, concerts, webinars and invite friends to join." }
    };

    const selected = contentMap[type] || { title: "✨ Dashboard", text: "Explore premium features and personalized content." };
    titleEl.innerText = selected.title;
    textEl.innerText = selected.text;
    updateRichContent(type);
  };

  // Login validation
  loginForm.addEventListener("submit", function(e) {
    e.preventDefault();
    let email = document.getElementById("email").value.trim();
    let password = document.getElementById("password").value.trim();

    if (email === "akkash@gmail.com" && password === "123") {
      // Success notification
      const successMsg = document.createElement("div");
      successMsg.innerText = "✅ Login Successful! Welcome to MyBook.";
      successMsg.style.position = "fixed";
      successMsg.style.bottom = "24px";
      successMsg.style.left = "50%";
      successMsg.style.transform = "translateX(-50%)";
      successMsg.style.backgroundColor = "#1f8b4c";
      successMsg.style.color = "white";
      successMsg.style.padding = "14px 28px";
      successMsg.style.borderRadius = "50px";
      successMsg.style.fontWeight = "bold";
      successMsg.style.zIndex = "1000";
      successMsg.style.boxShadow = "0 8px 20px rgba(0,0,0,0.15)";
      successMsg.style.backdropFilter = "blur(4px)";
      successMsg.style.fontSize = "0.95rem";
      document.body.appendChild(successMsg);
      setTimeout(() => successMsg.remove(), 2600);

      loginBox.style.display = "none";
      dashboard.style.display = "block";

      // Set greeting based on time
      const hour = new Date().getHours();
      let greeting = "🌟 Welcome back";
      if (hour < 12) greeting = "☀️ Good Morning";
      else if (hour < 18) greeting = "🌤️ Good Afternoon";
      else greeting = "🌙 Good Evening";
      titleEl.innerHTML = `${greeting}, Akkash! 🚀`;
      textEl.innerHTML = "Select any option from the professional sidebar to explore rich interactive content.";

      // Set default active menu: Feed
      const defaultFeedItem = document.querySelector('.sidebar li[data-menu="feed"]');
      if (defaultFeedItem) {
        setActiveMenuItem(defaultFeedItem);
      }
      showContent('feed', defaultFeedItem);
    } else {
      const errorToast = document.createElement("div");
      errorToast.innerText = "❌ Invalid Credentials! Use: akkash@gmail.com / 123";
      errorToast.style.position = "fixed";
      errorToast.style.bottom = "24px";
      errorToast.style.left = "50%";
      errorToast.style.transform = "translateX(-50%)";
      errorToast.style.backgroundColor = "#e41e3f";
      errorToast.style.color = "white";
      errorToast.style.padding = "14px 28px";
      errorToast.style.borderRadius = "50px";
      errorToast.style.fontWeight = "bold";
      errorToast.style.zIndex = "1000";
      errorToast.style.boxShadow = "0 8px 20px rgba(0,0,0,0.15)";
      document.body.appendChild(errorToast);
      setTimeout(() => errorToast.remove(), 2800);

      const box = document.querySelector(".login-box");
      box.style.animation = "shake 0.4s ease-in-out 0s 1";
      setTimeout(() => { box.style.animation = ""; }, 500);
    }
  });

  // Add shake keyframes if not already defined
  if (!document.querySelector('#dynamicShake')) {
    const shakeStyle = document.createElement('style');
    shakeStyle.id = 'dynamicShake';
    shakeStyle.textContent = `
      @keyframes shake {
        0% { transform: translateX(0); }
        25% { transform: translateX(-6px); }
        75% { transform: translateX(6px); }
        100% { transform: translateX(0); }
      }
      .rich-card {
        transition: all 0.25s cubic-bezier(0.2, 0.9, 0.4, 1.1);
      }
      .sidebar li {
        user-select: none;
        font-weight: 520;
      }
    `;
    document.head.appendChild(shakeStyle);
  }

  // Create New Account button interaction
  const createBtn = document.querySelector(".create");
  if (createBtn) {
    createBtn.addEventListener("click", () => {
      alert("✨ Create new account (Demo). Use credentials: akkash@gmail.com / 123 to experience full dashboard.");
    });
  }

  // Forgot password handler
  const forgotLink = document.querySelector(".forgot");
  if (forgotLink) {
    forgotLink.addEventListener("click", (e) => {
      e.preventDefault();
      alert("📧 Password reset link would be sent to your registered email. Demo: akkash@gmail.com / 123");
    });
  }

  // Professional guard: if dashboard visible, ensure sidebar menu works perfectly
  // Auto-set any missing active on page load after login simulation
  console.log("✅ Professional Facebook-style UI with advanced sidebar menu active");
</script>
</body>
</html> 