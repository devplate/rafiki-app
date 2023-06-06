var count = 2;

function new_link() {
    count++;
    var o = document.createElement("div"),
        e = '<div class="row"><div class="col-lg-12"><div class="mb-3"><label for="degreeTitle" class="form-label">Degree Title</label><input type="text" class="form-control" id="degreeTitle" placeholder="Degree title"></div></div><div class="col-lg-12"><div class="mb-3"><label for="description" class="form-label">Description</label><textarea class="form-control" id="description" rows="3" placeholder="Enter description"></textarea></div></div><div class="hstack gap-2 justify-content-end"><a class="btn btn-danger no-border-radius" href="javascript:deleteEl(' + (o.id = count) + ')">Delete</a></div></div>',
        e = (o.innerHTML = document.getElementById("newForm").innerHTML + e, document.getElementById("newlink").appendChild(o), document.querySelectorAll("[data-trigger]"));
    Array.from(e).forEach(function(o) {
        new Choices(o, {
            placeholderValue: "This is a placeholder set in the config",
            searchPlaceholderValue: "This is a search placeholder",
            searchEnabled: !1
        })
    })
}

function deleteEl(o) {
    o = (d = document).getElementById(o);
    d.getElementById("newlink").removeChild(o)
}