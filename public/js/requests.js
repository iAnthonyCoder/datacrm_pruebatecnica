var _request = {

    listdata: function (_data) {
        return $.ajax({
            url: _data.url,
            type: "GET",
            dataType: "json"
        })

    }
}