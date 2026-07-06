// Interactive Dusun Explorer React Component

const DUSUN_DATA = {
  mentaraman: {
    name: "Dusun Mentaraman",
    tagline: "Pusat Pemerintahan & Administrasi Desa",
    population: "3.240 Jiwa",
    rtrt: "5 RW / 21 RT",
    landmark: "Kantor Desa, Puskesmas Pembantu, SDN Mentaraman 1 & 2",
    description: "Merupakan pusat keramaian dan administrasi Desa Mentaraman. Memiliki fasilitas pendidikan dasar terlengkap serta menjadi simpul perdagangan warga melalui pasar desa mingguan.",
    stats: [
      { name: "Pertanian", value: 45 },
      { name: "Perdagangan", value: 25 },
      { name: "Jasa/PNS", value: 20 },
      { name: "Lainnya", value: 10 }
    ],
    accent: "#30563f"
  },
  gondangrejo: {
    name: "Dusun Gondangrejo",
    tagline: "Sentra Perkebunan & Agrobisnis",
    population: "1.450 Jiwa",
    rtrt: "2 RW / 6 RT",
    landmark: "Perkebunan Cokelat, Kelapa Sawit, UMKM Gula Kelapa",
    description: "Dikenal sebagai lumbung pangan desa dengan hamparan kebun kelapa dan sawit yang produktif. Mayoritas warga memproduksi gula kelapa murni (gula merah) skala rumah tangga.",
    stats: [
      { name: "Pertanian", value: 75 },
      { name: "Buruh Tani", value: 15 },
      { name: "Perdagangan", value: 6 },
      { name: "Lainnya", value: 4 }
    ],
    accent: "#b8963e"
  },
  gondangtowo: {
    name: "Dusun Gondangtowo",
    tagline: "Kawasan Pesisir, Bahari & Wisata",
    population: "1.120 Jiwa",
    rtrt: "2 RW / 6 RT",
    landmark: "Pantai Jonggring Saloko, Watu Ngebros, Tempat Pelelangan Ikan",
    description: "Kawasan eksotis di pesisir Samudera Hindia. Selain destinasi wisata Pantai Jonggring Saloko, wilayah ini menjadi pusat nelayan tradisional mencari hasil laut segar.",
    stats: [
      { name: "Nelayan", value: 65 },
      { name: "Pertanian", value: 15 },
      { name: "Sektor Wisata", value: 12 },
      { name: "Lainnya", value: 8 }
    ],
    accent: "#9c7c64"
  }
};

function DusunExplorer() {
  const [selected, setSelected] = React.useState("mentaraman");
  const data = DUSUN_DATA[selected];

  return (
    <div className="dusun-explorer-wrapper" style={{
      background: "#ffffff",
      borderRadius: "20px",
      padding: "24px",
      boxShadow: "0 10px 30px rgba(0,0,0,0.04)",
      border: "1px solid rgba(0,0,0,0.06)",
      maxWidth: "1100px",
      margin: "0 auto"
    }}>
      <div style={{
        display: "grid",
        gridTemplateColumns: "1fr",
        gap: "24px"
      }}>
        {/* Navigation Tabs */}
        <div style={{
          display: "flex",
          justifyContent: "center",
          gap: "12px",
          flexWrap: "wrap",
          marginBottom: "8px"
        }}>
          {Object.keys(DUSUN_DATA).map((key) => (
            <button
              key={key}
              onClick={() => setSelected(key)}
              style={{
                padding: "12px 24px",
                borderRadius: "50px",
                border: "none",
                fontSize: "0.95rem",
                fontWeight: "700",
                cursor: "pointer",
                transition: "all 0.3s ease",
                background: selected === key ? DUSUN_DATA[key].accent : "#f0efe9",
                color: selected === key ? "#ffffff" : "#443b32",
                boxShadow: selected === key ? "0 4px 15px rgba(0,0,0,0.15)" : "none"
              }}
            >
              {DUSUN_DATA[key].name}
            </button>
          ))}
        </div>

        {/* Content Layout */}
        <div className="explorer-grid" style={{
          display: "grid",
          gridTemplateColumns: "repeat(auto-fit, minmax(300px, 1fr))",
          gap: "32px",
          alignItems: "start"
        }}>
          {/* Left Panel: Info Card */}
          <div style={{
            background: "#fdfdfb",
            borderRadius: "16px",
            padding: "24px",
            borderLeft: `5px solid ${data.accent}`
          }}>
            <span style={{
              fontSize: "0.75rem",
              textTransform: "uppercase",
              letterSpacing: "2px",
              color: data.accent,
              fontWeight: "800"
            }}>
              {data.tagline}
            </span>
            <h3 style={{
              fontSize: "1.8rem",
              margin: "8px 0 16px 0",
              fontWeight: "800",
              color: "#222"
            }}>
              {data.name}
            </h3>
            
            <p style={{
              color: "#555",
              lineHeight: "1.7",
              fontSize: "0.95rem",
              marginBottom: "20px"
            }}>
              {data.description}
            </p>

            <div style={{
              display: "grid",
              gridTemplateColumns: "repeat(auto-fit, minmax(130px, 1fr))",
              gap: "16px",
              borderTop: "1px solid #eee",
              paddingTop: "16px"
            }}>
              <div>
                <span style={{ fontSize: "0.8rem", color: "#888" }}>Jumlah Penduduk</span>
                <p style={{ fontSize: "1.1rem", fontWeight: "700", margin: "4px 0 0", color: "#222" }}>{data.population}</p>
              </div>
              <div>
                <span style={{ fontSize: "0.8rem", color: "#888" }}>Pembagian Wilayah</span>
                <p style={{ fontSize: "1.1rem", fontWeight: "700", margin: "4px 0 0", color: "#222" }}>{data.rtrt}</p>
              </div>
            </div>

            <div style={{ marginTop: "16px" }}>
              <span style={{ fontSize: "0.8rem", color: "#888" }}>Sarana / Landmark Utama</span>
              <p style={{ fontSize: "0.95rem", fontWeight: "600", margin: "4px 0 0", color: "#444" }}>{data.landmark}</p>
            </div>
          </div>

          {/* Right Panel: Interactive Visual Stats */}
          <div style={{
            background: "#fdfdfb",
            borderRadius: "16px",
            padding: "24px",
            boxShadow: "inset 0 0 10px rgba(0,0,0,0.01)",
            border: "1px solid #eee"
          }}>
            <h4 style={{
              fontSize: "1.1rem",
              fontWeight: "800",
              marginBottom: "20px",
              color: "#222"
            }}>
              Mata Pencaharian & Profil Ekonomi
            </h4>

            {/* Custom Animated Stats Bars */}
            <div style={{ display: "flex", flexDirection: "column", gap: "16px" }}>
              {data.stats.map((stat, i) => (
                <div key={i}>
                  <div style={{
                    display: "flex",
                    justifyContent: "space-between",
                    fontSize: "0.85rem",
                    fontWeight: "700",
                    color: "#444",
                    marginBottom: "6px"
                  }}>
                    <span>{stat.name}</span>
                    <span>{stat.value}%</span>
                  </div>
                  <div style={{
                    width: "100%",
                    height: "8px",
                    background: "#eee",
                    borderRadius: "10px",
                    overflow: "hidden"
                  }}>
                    <div style={{
                      width: `${stat.value}%`,
                      height: "100%",
                      background: data.accent,
                      borderRadius: "10px",
                      transition: "width 0.8s cubic-bezier(0.1, 0.9, 0.2, 1)"
                    }}></div>
                  </div>
                </div>
              ))}
            </div>

            {/* Micro interactivity details */}
            <div style={{
              marginTop: "24px",
              fontSize: "0.8rem",
              color: "#777",
              textAlign: "center",
              borderTop: "1px solid #eee",
              paddingTop: "16px"
            }}>
              * Data bersumber dari Profil Kependudukan Desa Mentaraman Terkini.
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}

// Render component
const domContainer = document.querySelector('#dusun-explorer-root');
if (domContainer) {
  const root = ReactDOM.createRoot(domContainer);
  root.render(<DusunExplorer />);
}
