# 🎭 Meemipankki

A modern web-based meme gallery application with dual viewing modes and responsive design. Built with PHP and vanilla JavaScript, designed to run on Apache servers.

## 📁 Project Structure

```
meemipankki/
└── koodi/
    ├── images/          # Meme image storage directory
    │   ├── *.jpg
    │   ├── *.jpeg
    │   ├── *.png
    │   ├── *.gif
    │   └── *.webp
    ├── index.php        # Main application file
    ├── main.php         # Gallery content generator
    ├── page.css         # Stylesheet
    └── README.md        # This file
```

## ✨ Features

### 🔄 Dual View Modes
- **Grid View**: Compact Instagram-style photo grid (default)
- **Feed View**: Reddit-style layout with titles and metadata

### 🎨 Modern UI
- Clean, responsive Material Design-inspired interface
- Collapsible sidebar navigation
- Smooth animations and hover effects
- Mobile-optimized layout

### 📱 Responsive Design
- Desktop, tablet, and mobile support
- Touch-friendly navigation
- Adaptive grid layouts

### 🗂️ Content Management
- Automatic image detection and sorting
- File modification date tracking
- Smart title generation from filenames
- Support for multiple image formats

## 🚀 Quick Start

### Prerequisites
- **XAMPP** (Apache + PHP)
- **Linux Mint** (or any Linux distribution)
- Web browser

### Installation

1. **Start XAMPP services**
   ```bash
   sudo /opt/lampp/lampp start
   ```

2. **Navigate to your web directory**
   ```bash
   cd /opt/lampp/htdocs
   ```

3. **Clone or copy the project**
   ```bash
   # Create project directory
   mkdir meemipankki
   cd meemipankki
   mkdir koodi
   cd koodi
   
   # Copy your files here
   # - index.php
   # - main.php  
   # - page.css
   mkdir images
   ```

4. **Add your memes**
   - Place your image files (.jpg, .jpeg, .png, .gif, .webp) in the `images/` folder
   - Files will be automatically detected and displayed

5. **Access the application**
   - Open browser and go to: `http://localhost/meemipankki/koodi/`

## 🛠️ Configuration

### Supported Image Formats
- JPEG (.jpg, .jpeg)
- PNG (.png)
- GIF (.gif)
- WebP (.webp)

### Adding New Images
Simply drop new image files into the `images/` directory. The application will:
- Auto-detect new files
- Sort by modification date (newest first)
- Generate readable titles from filenames

### Filename Conventions
For better titles, use descriptive filenames:
- `funny_cat_meme.jpg` → "Funny Cat Meme"
- `epic-fail-2024.png` → "Epic Fail 2024"
- `reaction_gif.gif` → "Reaction Gif"

## 🎮 Usage

### Navigation
- **Sidebar**: Browse different categories (All Memes, Favorites, Recent, etc.)
- **Search**: Use the top search bar to find specific memes
- **View Toggle**: Switch between Grid and Feed views using the button next to search

### View Modes
- **Grid View**: Compact squares, perfect for browsing
- **Feed View**: Large images with titles, better for detailed viewing

### Mobile Usage
- Tap the hamburger menu (☰) to open/close sidebar
- Swipe gestures supported
- Optimized touch targets

## 🔧 Customization

### Changing Colors
Edit `page.css` and modify the CSS custom properties:
```css
:root {
  --primary-color: #1976d2;
  --accent-color: #e3f2fd;
  --text-color: #202124;
}
```

### Grid Layout
Adjust grid size in `page.css`:
```css
.gallery {
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
  gap: 4px;
}
```

### Adding New Sidebar Items
Edit the sidebar section in `index.php` to add new categories or links.

## 🐛 Troubleshooting

### Images Not Loading
- Check that files are in the `images/` directory
- Verify file permissions: `chmod 755 images/`
- Ensure supported file formats

### Apache Issues
```bash
# Restart Apache
sudo /opt/lampp/lampp restart

# Check Apache status  
sudo /opt/lampp/lampp status
```

### PHP Errors
- Check XAMPP error logs: `/opt/lampp/logs/error_log`
- Ensure PHP is enabled in XAMPP

## 🔒 Security Notes

- This is a local development setup
- For production use, implement proper security measures:
  - File upload validation
  - Access controls
  - Input sanitization

## 🤝 Contributing

Feel free to fork, modify, and improve! Some ideas for enhancements:

- Upload functionality
- Image metadata editing
- Favorite/rating system
- Advanced search filters
- Image compression
- Bulk operations

## 📄 License

This project is open source. Feel free to use and modify as needed.

## 🏗️ Built With

- **PHP** - Server-side logic
- **HTML5/CSS3** - Frontend structure and styling
- **Vanilla JavaScript** - Interactive functionality
- **Material Design** - UI/UX inspiration
- **XAMPP** - Development environment

---

**Happy meme browsing! 🎉**

> Made with the italian painter claude monet 🫀
