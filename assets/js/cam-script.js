// open camera

let openCamera = document.querySelector('#openCamera')
openCamera.addEventListener('click', function(evt) {
    evt.preventDefault
    let panel = this.nextElementSibling
    if (panel.style.maxHeight){
        panel.style.maxHeight = null
    } else {
        panel.style.maxHeight = '700'+ 'px'
        startCamera()
    }
})

// webcam

function startCamera() {
    Webcam.set({
        width: 320,
        height: 240,
        image_format: 'jpeg',
        jpeg_quality: 90,
    })
    
    Webcam.set('constraints',{
            facingMode: "environment"
        });
    
    Webcam.attach('#my_camera')
    
    let btn = document.querySelector('#makePhoto')
    
    btn.addEventListener('click', () => {
        take_snapshot()
        navigator.geolocation.getCurrentPosition(success, error, {
            enableHighAccuracy: true
        })
    })
    
    function take_snapshot() {
        Webcam.snap(function(data_uri) {
            document.querySelector('#results').innerHTML =
            `<?php echo ?><h2>Фотография с вашей камеры </h2>
            <img src="${data_uri}">`
            document.querySelector('#obj-img').value = data_uri
        })
    }
    
    function success ({coords}) {
        const {latitude, longitude} = coords
        document.getElementById('obj-location').value=`${latitude}, ${longitude}`
    }
    
    function error (){
    
    }
}


