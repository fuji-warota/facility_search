function success(pos) {
  var crd = pos.coords;

  var $map = {'lat':`${crd.latitude}`,'lon':`${crd.longitude}`};
  $.ajax({
      type: 'POST',
      url: './index.php',
      data: $map,
      });
}

function error(err) {
  console.warn(`ERROR(${err.code}): ${err.message}`);
}

navigator.geolocation.getCurrentPosition(success, error);
