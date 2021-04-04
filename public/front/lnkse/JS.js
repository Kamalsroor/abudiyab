StartI = 0;
function YHbrand(BrandArray) {
    // Folder path
    Folder = BrandArray['Folder'];

    // Options
    Speed = BrandArray['Speed']; // The speed of changing images
    if (Speed == undefined) {Speed = 1000} // Default for Speed : (1000)

    ImgId = BrandArray['ImgId']; // ID image
    if (ImgId == undefined) {ImgId = 'YHbrand'} // Default for ID image (brand)

    Type = BrandArray['Type']; // Image type
    if (Type == undefined) {Type = 'png'} // Default for Image type (png)

    $.ajax({
        url: '/partnersImgs',
        method: 'GET',
        data: {i: StartI++, path: Folder, type: Type},
        success: function(data) {
            data = data.replace('D:/abudiyab/public/','http://127.0.0.1:8000/');
            if (data == 0) {
                StartI = 0;
            }
            else{
                $('img#' + ImgId).attr({
                    src: data
                });
            }
            console.log(data);
        }
    });

    setTimeout(function(){
        YHbrand(BrandArray);
    },Speed);
}