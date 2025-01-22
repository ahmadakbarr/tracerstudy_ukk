// script.js
document.getElementById('burgerMenu').addEventListener('click', function () {
    const dropdown = document.getElementById('dropdownMenu');
    dropdown.style.display = dropdown.style.display === 'none' ? 'block' : 'none';
  });

  // diagram
  // Data untuk Tracer Chart
const tracerChart = document.getElementById('tracerChart').getContext('2d');
new Chart(tracerChart, {
    type: 'pie', // Mengubah jenis diagram menjadi Pie
    data: {
        labels: ['Bekerja', 'Kuliah', 'Menganggur', 'Lainnya'], // Label kategori
        datasets: [{
            data: [300, 200, 50, 50], // Data jumlah alumni
            backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0'], // Warna setiap bagian
            hoverOffset: 4 // Efek hover
        }]
    },
    options: {
        plugins: {
            legend: {
                display: true,
                position: 'right', // Letak legenda
            }
        }
    }
});

// Data untuk Tracer Kerja Chart
const tracerChartKerja = document.getElementById('tracerChart-kerja').getContext('2d');
new Chart(tracerChartKerja, {
    type: 'bar', // Diagram batang
    data: {
        labels: ['Teknik', 'Kesehatan', 'Ekonomi', 'Pendidikan'], // Label kategori pekerjaan
        datasets: [{
            label: 'Jumlah Alumni',
            data: [100, 150, 200, 150], // Data pekerjaan alumni
            backgroundColor: ['#4BC0C0', '#FF6384', '#36A2EB', '#FFCE56'], // Warna batang
            borderColor: '#ccc', // Warna border batang
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                display: true,
                position: 'top' // Letak legenda
            }
        },
        scales: {
            x: {
                beginAtZero: true
            },
            y: {
                beginAtZero: true
            }
        }
    }
});

  
  // Optional: Close menu when clicking outside
  document.addEventListener('click', function (event) {
    const menu = document.getElementById('dropdownMenu');
    const button = document.getElementById('burgerMenu');
    if (!menu.contains(event.target) && !button.contains(event.target)) {
      menu.style.display = 'none';
    }
  });
  document.addEventListener("DOMContentLoaded", function () {
    const dummyData = {
      kerja: 45,
      kuliah: 30,
      belum_mengisi: 25
    };
  
    const ctx = document.getElementById('tracerChart').getContext('2d');
    const tracerChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ['Kerja', 'Kuliah', 'Belum Mengisi'],
        datasets: [{
          data: [dummyData.kerja, dummyData.kuliah, dummyData.belum_mengisi],
          backgroundColor: ['#4caf50', '#2196f3', '#ff9800'],
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: {
            display: false // Hilangkan legenda default
          },
        }
      }
    });
  
    // Buat legenda manual
    const legendList = document.getElementById('legendList');
    const labels = ['Kerja', 'Kuliah', 'Belum Mengisi'];
    const colors = ['#4caf50', '#2196f3', '#ff9800'];
  
    labels.forEach((label, index) => {
      const legendItem = document.createElement('li');
      legendItem.innerHTML = `<span style="background-color: ${colors[index]}; width: 15px; height: 15px; display: inline-block; margin-right: 10px;"></span>${label}`;
      legendList.appendChild(legendItem);
    });
  });
  document.addEventListener("DOMContentLoaded", function () {
    // Data sementara
    const dummyData = {
      jakarta: 200,
      bandung: 150,
      surabaya: 100,
      yogyakarta: 150
    };
  
    // Inisialisasi chart
    const ctx = document.getElementById('tracerChart-kerja').getContext('2d');
    const tracerChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ['Jakarta', 'Bandung', 'Surabaya', 'Yogyakarta'],
        datasets: [{
          data: [
            dummyData.jakarta, 
            dummyData.bandung, 
            dummyData.surabaya, 
            dummyData.yogyakarta
          ],
          backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4CAF50'],
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: {
            display: false // Hilangkan legenda bawaan
          },
          tooltip: {
            enabled: false // Nonaktifkan tooltip
          }
        }
      }
    });
  
    // Buat legenda manual
    const legendList = document.getElementById('legendList-kerja');
    const labels = ['Jakarta', 'Bandung', 'Surabaya', 'Yogyakarta'];
    const colors = ['#FF6384', '#36A2EB', '#FFCE56', '#4CAF50'];
  
    labels.forEach((label, index) => {
      const legendItem = document.createElement('li');
      legendItem.innerHTML = `
        <span style="background-color: ${colors[index]}; 
                     width: 15px; 
                     height: 15px; 
                     display: inline-block; 
                     margin-right: 10px;"></span>
        ${label}: ${dummyData[Object.keys(dummyData)[index]]}
      `;
      legendList.appendChild(legendItem);
    });
  });
  