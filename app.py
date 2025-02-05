from flask import Flask, request, jsonify
import pickle
import numpy as np

# Load model
with open('model.pkl', 'rb') as f:
    model = pickle.load(f)

app = Flask(__name__)

@app.route('/predict', methods=['POST'])
def predict():
    data = request.get_json()

    # Ambil data fitur dari JSON
    features = np.array([[
        data['umur'],
        data['berat_badan'],
        data['tinggi_badan'],
        data['lingkar_kepala'],
        data['asupan_gizi'],
        data['sanitasi'],
        data['akses_air_bersih'],
        data['pola_makan_keluarga'],
        data['status_kesehatan_ibu'],
        data['pendidikan_ibu'],
        data['pendapatan_keluarga']
    ]])

    # Prediksi
    result = model.predict(features)

    # Kembalikan hasil prediksi
    if result[0] == 1:
        return jsonify({'prediksi': 'Stunting'})
    else:
        return jsonify({'prediksi': 'Tidak Stunting'})

if __name__ == '__main__':
    app.run(debug=True)
