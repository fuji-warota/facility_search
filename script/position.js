function success(pos) {
  var crd = pos.coords;

  console.log('success!:');
  console.log(`緯度: ${crd.latitude}`);
  console.log(`経度: ${crd.longitude}`);
  console.log(`精度: ${crd.accuracy} meters`);
  var pos = {'lat':`crd.latitude`,'lon':`crd.longitude`};
  $.ajax({
      type: 'POST',
      url: './index.php',
      data: pos,
      }).fail(function){
          window.alert('位置情報送信失敗');
        });
}

function error(err) {
  console.warn(`ERROR(${err.code}): ${err.message}`);
}

navigator.geolocation.getCurrentPosition(success, error);
