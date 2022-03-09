const flashdata = $('#flash-data').data('flashdata');
const notif = $('#notification').data('flashdata');

if (flashdata) {
  // Login Failed
  if (flashdata == 'Login Failed') {
    Swal.fire({
      icon: 'error',
      title: flashdata,
      text: 'Email or password is not valid. Please try again!',
      confirmButtonColor: '#dc3545',
    })
  }
  // Logout Success
  if (flashdata == 'Logout Success') {
    Swal.fire({
      icon: 'success',
      title: 'Berhasil Logout!',
      text: 'Anda berhasil keluar, terima kasih.',
      confirmButtonColor: '#198754',
    })
  }
}

if (notif) {
  if (notif == "Link created") {
    Lobibox.notify('success', {
      pauseDelayOnHover: true,
      continueDelayOnInactiveTab: false,
      position: 'top right',
      icon: 'bx bx-check-circle',
      msg: 'Short link has been created!'
    });
  }
  if (notif == "Link updated") {
    Lobibox.notify('success', {
      pauseDelayOnHover: true,
      continueDelayOnInactiveTab: false,
      position: 'top right',
      icon: 'bx bx-check-circle',
      msg: 'Short link has been edited!'
    });
  }
  if (notif == "Link deleted") {
    Lobibox.notify('success', {
      pauseDelayOnHover: true,
      continueDelayOnInactiveTab: false,
      position: 'top right',
      icon: 'bx bx-check-circle',
      msg: 'Short link has been deleted!'
    });
  }
}

// VISITOR CHARTS
$(function () {
  var options = {
    series: [],
    chart: {
      foreColor: '#9ba7b2',
      height: 360,
      type: 'area',
      zoom: {
        enabled: false
      },
      toolbar: {
        show: true
      },
    },
    colors: ['#0c971a'],
    title: {
      text: 'Web Visitor',
      align: 'left',
      style: {
        fontSize: "16px",
        color: '#666'
      }
    },
    dataLabels: {
      enabled: true
    },
    stroke: {
      curve: 'smooth'
    },
    xaxis: {
      // type: 'datetime',
      categories: ['March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December', 'January', 'February']
    },
    tooltip: {
      x: {
        format: 'dd/MM/yy HH:mm'
      },
    },
  };
  var chart = new ApexCharts(document.querySelector("#visitorChart"), options);
  chart.render();

  var updateChart = function () {
    $.ajax({
      url: window.location.origin + '/visitor_data',
      type: 'GET',
      dataType: 'json',
      success: function (value) {
        chart.updateSeries([{
          name: 'Visitor',
          data: value
        }])
        $('#MarCounter').html(value[0]);
        $('#AprCounter').html(value[1]);
        $('#MayCounter').html(value[2]);
        $('#JunCounter').html(value[3]);
        $('#JulCounter').html(value[4]);
        $('#AugCounter').html(value[5]);
        $('#SepCounter').html(value[6]);
        $('#OctCounter').html(value[7]);
        $('#NovCounter').html(value[8]);
        $('#DecCounter').html(value[9]);
        $('#JanCounter').html(value[10]);
        $('#FebCounter').html(value[11]);
      },
      error: function (data) {
        console.log(data)
      }
    });
  }

  updateChart();
  // setInterval(() => {
  //   updateChart();
  // }, 2000);
});