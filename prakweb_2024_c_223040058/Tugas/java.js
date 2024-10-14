document.addEventListener("DOMContentLoaded", function() {
    var gallery = document.getElementById('gallery');
    
    // Contoh gambar untuk galeri
    var images = [
        'https://via.placeholder.com/300x200',
        'https://via.placeholder.com/300x200/ff0000',
        'https://via.placeholder.com/300x200/00ff00',
        'https://via.placeholder.com/300x200/0000ff',
        'https://via.placeholder.com/300x200/ffff00',
        'https://via.placeholder.com/300x200/ff00ff'
    ];

    images.forEach(function(src) {
        var col = document.createElement('div');
        col.className = 'col-lg-4 col-md-6 mb-4';
        var img = document.createElement('img');
        img.src = src;
        img.className = 'img-fluid';
        img.alt = 'Gallery Image'; // Tambahkan atribut alt untuk aksesibilitas
        col.appendChild(img);
        gallery.appendChild(col);
    });
});
