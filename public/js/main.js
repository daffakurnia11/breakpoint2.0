$(function () {
  $('.faq-question').on('click', function () {
    if ($(this).hasClass('collapsed')) {
      // pluss
      $(this).children('.faq-question-indicator').removeClass('show')
      $(this).children('.faq-question-indicator').html('+')
    } else {
      // minus
      $(this).children('.faq-question-indicator').addClass('show')
      $(this).children('.faq-question-indicator').html('-')
    }
  });
});
$(function () {
  $('.state-futures').on('click', function () {
    if ($(this).hasClass('collapsed')) {
      // pluss
      $(this).children('.futures-topbar').removeClass('show')
      $(this).children('.futures-topbar').html('+')
    } else {
      // minus
      $(this).children('.futures-topbar').addClass('show')
      $(this).children('.futures-topbar').html('-')
    }
  });
});