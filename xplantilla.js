let thumbnails = document.querySelectorAll('.image-thumbnail');
let featuredImage = document.querySelector('.image-featured');

thumbnails.forEach(thumbnail => {
  thumbnail.addEventListener('click', function() {
    featuredImage.src = this.src;
  });
});