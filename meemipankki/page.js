// NEW: View toggle functionality
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
