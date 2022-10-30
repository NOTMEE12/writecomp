var logging = false
var normal_text = 'Tu nie ma żadnej wiadomości! napisz swoją, która będzie wyświetlona przez 8 godzin!'
var your_text = normal_text
var date = new Date()
var time_end = new Date()
var time = new Date()
var delay = 8
var time_since_last_change = null
const socket = io('http://localhost:3000')

socket.on('chat-message', data => {
    console.log(data)
})


function check_update() {
    date = new Date(
    time = new Date(time_end.getTime() - date.getTime());
    // logs
    if (logging === true) {
        console.log(`delay: ${delay}`)
        console.log(`time to change: ${time.getHours()-1}:${time.getMinutes()}:${time.getSeconds()}`)
        console.log("============================================\n")
    }
    // if actual time is equal to end time
    if (date.getTime() <= time_end.getTime()) {
        document.getElementById("time").innerHTML = `posoztały czas: ${time.getHours()-1}:${time.getMinutes()}:${time.getSeconds()}`
        return false
    } else {
        document.getElementById("time").innerHTML = `Możesz napisać swoją wiadomość!`
        document.getElementById("text").innerHTML = normal_text
        return true
    }
}

function update_text() {
    check_update()
    document.getElementById("text").innerHTML = your_text
}

function submit() {
    if (document.getElementById("button").value.trim() != "") {
        var text = document.getElementById("button").value
        write_text(text)
    }  else {}
}

function write_text ( text ) {
    if (check_update()) {
        time_end = new Date(new Date().getTime() + (3600000*delay))
        your_text = text
    }
    update_text()
}