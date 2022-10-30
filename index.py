from flask import Flask

your_text = None
time_end = 0

app = Flask(__name__)

@app.route("/")
def index():
    return open("home.html").read()

