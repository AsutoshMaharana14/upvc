<?php include 'header.php'; ?>

<div class="gallery-container">
    <h1 class="gallery-title">Our Gallery</h1>
    
    <div class="gallery-filters">
        <button class="filter-btn active" data-filter="all">All</button>
        <button class="filter-btn" data-filter="images">Images</button>
        <button class="filter-btn" data-filter="videos">Videos</button>
    </div>

    <div class="gallery-grid">
        <!-- Images -->
        <div class="gallery-item" data-category="images">
            <img src="/mgupvc/images/gallery-1.jpg" alt="Gallery Image 1" loading="lazy">
            <div class="gallery-overlay">
                <i class="fas fa-search-plus"></i>
            </div>
        </div>

         <div class="gallery-item" data-category="images">
            <img src="/mgupvc/images/gallery-2.jpg" alt="Gallery Image 6" loading="lazy">
            <div class="gallery-overlay">
                <i class="fas fa-search-plus"></i>
            </div>
        </div>

 <div class="gallery-item" data-category="images">
            <img src="/mgupvc/images/gallery-3.jpg" alt="Gallery Image 6" loading="lazy">
            <div class="gallery-overlay">
                <i class="fas fa-search-plus"></i>
            </div>
        </div>
        <!-- Videos -->
        <div class="gallery-item" data-category="videos">
            <video controls poster="/mgupvc/images/gallery-3.jpg">
                <source src="/mgupvc/images/gallery-4.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="gallery-overlay">
                <i class="fas fa-play"></i>
            </div>
        </div>
    </div>
</div>

<!-- Lightbox Modal -->
<div class="lightbox-modal">
    <span class="close-modal">&times;</span>
    <img class="modal-content" id="modal-img">
    <video class="modal-content" id="modal-video" controls>
        <source src="" type="video/mp4">
    </video>
</div>

<style>
.gallery-container {
    padding: 2rem;
    max-width: 1200px;
    margin: 0 auto;
}

.gallery-title {
    text-align: center;
    margin-bottom: 2rem;
    color: #333;
}

.gallery-filters {
    display: flex;
    justify-content: center;
    gap: 1rem;
    margin-bottom: 2rem;
}

.filter-btn {
    padding: 0.5rem 1.5rem;
    border: none;
    background: #f0f0f0;
    cursor: pointer;
    border-radius: 25px;
    transition: all 0.3s ease;
}

.filter-btn.active {
    background: #007bff;
    color: white;
}

.gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 1.5rem;
}

.gallery-item {
    position: relative;
    overflow: hidden;
    border-radius: 8px;
    cursor: pointer;
}

.gallery-item img,
.gallery-item video {
    width: 100%;
    height: 250px;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.gallery-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.gallery-overlay i {
    color: white;
    font-size: 2rem;
}

.gallery-item:hover img,
.gallery-item:hover video {
    transform: scale(1.05);
}

.gallery-item:hover .gallery-overlay {
    opacity: 1;
}

/* Lightbox Modal Styles */
.lightbox-modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.9);
    z-index: 1000;
}

.modal-content {
    max-width: 90%;
    max-height: 90vh;
    margin: auto;
    display: block;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.close-modal {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    cursor: pointer;
}

@media (max-width: 768px) {
    .gallery-grid {
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    }
    
    .gallery-filters {
        flex-wrap: wrap;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Filter functionality
    const filterBtns = document.querySelectorAll('.filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Remove active class from all buttons
            filterBtns.forEach(b => b.classList.remove('active'));
            // Add active class to clicked button
            btn.classList.add('active');

            const filter = btn.getAttribute('data-filter');

            galleryItems.forEach(item => {
                if (filter === 'all' || item.getAttribute('data-category') === filter) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });

    // Lightbox functionality
    const modal = document.querySelector('.lightbox-modal');
    const modalImg = document.getElementById('modal-img');
    const modalVideo = document.getElementById('modal-video');
    const closeBtn = document.querySelector('.close-modal');

    galleryItems.forEach(item => {
        item.addEventListener('click', () => {
            modal.style.display = 'block';
            
            if (item.querySelector('img')) {
                modalImg.style.display = 'block';
                modalVideo.style.display = 'none';
                modalImg.src = item.querySelector('img').src;
            } else if (item.querySelector('video')) {
                modalImg.style.display = 'none';
                modalVideo.style.display = 'block';
                modalVideo.src = item.querySelector('video source').src;
                modalVideo.play();
            }
        });
    });

    closeBtn.addEventListener('click', () => {
        modal.style.display = 'none';
        if (modalVideo.style.display === 'block') {
            modalVideo.pause();
        }
    });

    window.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.style.display = 'none';
            if (modalVideo.style.display === 'block') {
                modalVideo.pause();
            }
        }
    });
});
</script>

<?php include 'footer.php'; ?> 