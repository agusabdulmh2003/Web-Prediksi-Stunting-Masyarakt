import pandas as pd
from sklearn.ensemble import RandomForestClassifier
from sklearn.model_selection import train_test_split
from sklearn.metrics import accuracy_score
from sklearn.preprocessing import LabelEncoder  # Import LabelEncoder
import pickle
import os

# Load dataset
data = pd.read_csv('data_anak.csv')

# Mengonversi kolom kategori menjadi numerik
encoder = LabelEncoder()
data['status_gizi'] = encoder.fit_transform(data['status_gizi'])
data['sanitasi'] = encoder.fit_transform(data['sanitasi'])
data['akses_air_bersih'] = encoder.fit_transform(data['akses_air_bersih'])
data['status_stunting'] = encoder.fit_transform(data['status_stunting'])

# Misalnya kita memilih beberapa fitur untuk prediksi
features = ['umur', 'berat_badan', 'tinggi_badan', 'lingkar_kepala', 'status_gizi', 'sanitasi', 'akses_air_bersih', 'pendapatan_keluarga']
X = data[features]
y = data['status_stunting']  # Kolom target (status_stunting: 1 atau 0)

# Membagi data menjadi data latih dan uji
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=42)

# Latih model
model = RandomForestClassifier()
model.fit(X_train, y_train)

# Evaluasi model
y_pred = model.predict(X_test)
print('Accuracy:', accuracy_score(y_test, y_pred))

# Membuat direktori 'models' jika belum ada
if not os.path.exists('models'):
    os.makedirs('models')

# Simpan model ke file dengan mode 'wb' (write binary)
with open('model.pkl', 'wb') as f:
    pickle.dump(model, f)
