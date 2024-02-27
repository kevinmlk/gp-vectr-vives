'use strict';

const setup = () => {
  // Hamburger menu
  const hamburgerMenu = document.querySelector('.hamburger');
  const nav = document.querySelector('.nav-fullscreen');

  hamburgerMenu.addEventListener('click', () => toggleNav());

  const toggleNav = () => {
    hamburgerMenu.classList.toggle('hamburger-active');
    nav.classList.toggle('nav-fullscreen-open');
  }
}

window.addEventListener('load', setup);

// Subjects filters redirect
jQuery(document).ready(function ($) {
  $('#subjects-filter').change(function () {
    var termUrl = $(this).val();
    if (termUrl) {
      window.location.href = termUrl;
    }
  });
});

// Infinity scroll
jQuery(document).ready(function ($) {
  var page = 1; // Initialize the page number

  // Function to load more posts via AJAX
  function loadMorePosts() {
    $.ajax({
      url: ajaxurl, // WordPress AJAX URL
      type: 'POST',
      data: {
        action: 'load_more_gallery', // Custom AJAX action
        page: page,
      },
      success: function (response) {
        if (response) {
          $('#gallery-container').append(response);
          page++;
        } else {
          $('#load-more').hide(); // Hide the "Load More" button when no more posts are available
        }
      },
    });
  }

  // Load more posts when the "Load More" button is clicked
  $('#load-more').on('click', function () {
    loadMorePosts();
  });
});


// // Function to apply a random color to the selected text
// function applyRandomColorToSelection() {
//   const selection = window.getSelection();
//   let range = selection.getRangeAt(0);
//   let color = randomColor();
//   let span = document.createElement('span');
//   span.style.color = color;
//   range.surroundContents(span);
// }

// // Event listener for selectionchange event
// document.addEventListener('selectionchange', applyRandomColorToSelection);
