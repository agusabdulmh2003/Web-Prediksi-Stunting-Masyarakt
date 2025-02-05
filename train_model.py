import pandas as pd
from sklearn.ensemble import RandomForestClassifier
from sklearn.model_selection import train_test_split
from sklearn.metrics import accuracy_score
import pickle

# Load dataset
data = pd.read_csv('data_anak.csv')

# Misalnya kita memilih beberapa fitur untuk prediksi
features = ['umur', 'berat_badan', 'tinggi_badan', 'lingkar_kepala', 'asupan_gizi', 'sanitasi', 'akses_air_bersih', 'pola_makan_keluarga', 'status_kesehatan_ibu', 'pendidikan_ibu', 'pendapatan_keluarga']
X = data[features]
y = data['stunting']  # Kolom target (stunting: 1 atau 0)

# Membagi data menjadi data latih dan uji
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=42)

# Latih model
model = RandomForestClassifier()
model.fit(X_train, y_train)

# Evaluasi model
y_pred = model.predict(X_test)
print('Accuracy:', accuracy_score(y_test, y_pred))

# Simpan model ke file
with open('model.pkl', 'wb') as f:
    pickle.dump(model, f)
