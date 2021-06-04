function success(pos) {
  var crd = pos.coords;

  console.log('success!:');
  console.log(`緯度: ${crd.latitude}`);
  console.log(`経度: ${crd.longitude}`);
  console.log(`精度: ${crd.accuracy} meters`);
}

function error(err) {
  console.warn(`ERROR(${err.code}): ${err.message}`);
}

navigator.geolocation.getCurrentPosition(success, error);
