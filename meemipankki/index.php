<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meemipankki Gallery</title>
    <link rel="stylesheet" href="page.css">
</head>
<body>
    <!-- Top Navigation -->
    <nav class="top-nav">
        <div class="logo-section">
            <button class="menu-btn" onclick="toggleSidebar()">
                <svg class="search-icon" viewBox="0 0 24 24">
                    <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
                </svg>
            </button>
            <div class="logo">Meemipankki</div>
        </div>
        
        <div class="search-section">
            <div class="search-container">
                <svg class="search-icon" viewBox="0 0 24 24">
                    <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                </svg>
                <input type="text" class="search-input" placeholder="Search your memes" id="searchBox">
            </div>
            
            <!-- View toggle button -->
            <button class="view-toggle-btn" id="viewToggleBtn" onclick="toggleView()">
                <svg class="view-toggle-icon" viewBox="0 0 24 24" id="viewToggleIcon">
                    <path d="M4 11h5V5H4v6zm0 7h5v-6H4v6zm6 0h5v-6h-5v6zm6 0h5v-6h-5v6zm-6-7h5V5h-5v6zm6-6v6h5V5h-5z"/>
                </svg>
                <span id="viewToggleText">Grid</span>
            </button>
        </div>
        
        <div class="user-section">
            <!-- Clean space for future additions -->
        </div>
    </nav>

    <!-- Main Layout -->
    <div class="main-layout">
        <!-- Sidebar -->
        <aside class="sidebar" id="sidebar">
            <a href="#" class="sidebar-item active">
                <svg class="sidebar-icon" viewBox="0 0 24 24">
                    <path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/>
                </svg>
                All Memes
            </a>
            
            <a href="#" class="sidebar-item">
                <svg class="sidebar-icon" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                </svg>
                Favorites
            </a>
            
            <a href="#" class="sidebar-item">
                <svg class="sidebar-icon" viewBox="0 0 24 24">
                    <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>
                </svg>
                Recent
            </a>
            
            <a href="#" class="sidebar-item">
                <svg class="sidebar-icon" viewBox="0 0 24 24">
                    <path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/>
                </svg>
                Animated
            </a>
            
            <a href="#" class="sidebar-item">
                <svg class="sidebar-icon" viewBox="0 0 24 24">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                </svg>
                Categories
            </a>
            
            <a href="#" class="sidebar-item">
                <svg class="sidebar-icon" viewBox="0 0 24 24">
                    <path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 2 2h8c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/>
                </svg>
                Archive
            </a>
        </aside>

        <!-- Content Area -->
        <main class="content">
            <div class="content-header">
                <h1 class="content-title">All Memes</h1>
                <p class="content-subtitle">Browse your collection</p>
            </div>
            
            <div class="gallery" id="gallery">
                <?php include "main.php"; ?>
            </div>
        </main>
    </div>

    <script>
        // View toggle functionality
        let isFeedView = false;
        
        function toggleView() {
            isFeedView = !isFeedView;
            const gallery = document.getElementById('gallery');
            const toggleBtn = document.getElementById('viewToggleBtn');
            const toggleIcon = document.getElementById('viewToggleIcon');
            const toggleText = document.getElementById('viewToggleText');
            
            if (isFeedView) {
                gallery.classList.add('feed-view');
                toggleBtn.classList.add('active');
                toggleText.textContent = 'Feed';
                // Feed view icon (list)
                toggleIcon.innerHTML = '<path d="M3 13h2v-2H3v2zm0 4h2v-2H3v2zm0-8h2V7H3v2zm4 4h14v-2H7v2zm0 4h14v-2H7v2zM7 7v2h14V7H7z"/>';
            } else {
                gallery.classList.remove('feed-view');
                toggleBtn.classList.remove('active');
                toggleText.textContent = 'Grid';
                // Grid view icon
                toggleIcon.innerHTML = '<path d="M4 11h5V5H4v6zm0 7h5v-6H4v6zm6 0h5v-6h-5v6zm6 0h5v-6h-5v6zm-6-7h5V5h-5v6zm6-6v6h5V5h-5z"/>';
            }
        }

        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('show');
        }

        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', function(event) {
            const sidebar = document.getElementById('sidebar');
            const menuBtn = document.querySelector('.menu-btn');
            
            if (window.innerWidth <= 768 && 
                !sidebar.contains(event.target) && 
                !menuBtn.contains(event.target) &&
                sidebar.classList.contains('show')) {
                sidebar.classList.remove('show');
            }
        });

        // Handle sidebar items
        document.querySelectorAll('.sidebar-item').forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Remove active class from all items
                document.querySelectorAll('.sidebar-item').forEach(i => i.classList.remove('active'));
                
                // Add active class to clicked item
                this.classList.add('active');
                
                // Update content title
                const title = this.textContent.trim();
                document.querySelector('.content-title').textContent = title;
                document.querySelector('.content-subtitle').textContent = `Browse your ${title.toLowerCase()}`;
                
                // Close sidebar on mobile
                if (window.innerWidth <= 768) {
                    document.getElementById('sidebar').classList.remove('show');
                }
            });
        });

        // Search functionality
        document.getElementById('searchBox').addEventListener('input', function(e) {
            const query = e.target.value.toLowerCase();
            // Add search logic here
            console.log('Searching for:', query);
        });
    </script>
</body>
</html>

