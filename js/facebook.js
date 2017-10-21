// this produces an object: {access_token: string, token_type: string}
function getAuthToken(callback) {
    $.ajax({
        url: `https://graph.facebook.com/oauth/access_token?client_id=223677548043608&client_secret=14de0c5e090951821c8ab9eaaf50f7c7&grant_type=client_credentials`,
        success: function(data) {
            callback(data);
        }
    });
}

function getPhotos(callback) {
    getAuthToken(function(authToken) {
        $.ajax({
            url: `https://graph.facebook.com/v2.7/beijinginn/photos?${authToken.access_token}&type=uploaded&limit=24`,
            success: function(photos) {
                callback(photos.data);
            }
        });
    });
}
