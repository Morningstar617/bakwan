// Input UID
document.getElementById("uid").addEventListener("input", function () {
    var value = this.value;
    var regex = /^[0-9]*$/;
    if (!regex.test(value)) {
        this.value = value.replace(/[^0-9]/g, "");
    }
});
