from flask import Flask
from flask_restful import  Api
app = Flask(__name__,static_url_path='')
api=Api(app)

#routes
@app.route('/')
def index():
    return "heyo"

if __name__ == '__main__':
    app.run(debug=True)