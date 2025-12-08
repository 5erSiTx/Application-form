<!-- index.html -->
<!doctype html>
<html lang="th">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>แบบฟอร์มสมัคร</title>
  <link rel="stylesheet" href="style.css">
  <style>
        :root{
            --bg:#f3f6fb;
            --card:#ffffff;
            --accent:#4f46e5;
            --muted:#6b7280;
            --radius:14px;
            font-family: Inter, system-ui, -apple-system, 'Segoe UI', Roboto, Arial;
        }

        *{box-sizing:border-box}
        body{
            margin:0;
            min-height:100vh;
            display:flex;
            align-items:center;
            justify-content:center;
            background:linear-gradient(180deg,var(--bg),#e9f0ff);
            padding:32px;
            color:#111827;
        }

        .container{
            width:100%;
            max-width:900px;
            background:var(--card);
            border-radius:var(--radius);
            box-shadow:0 10px 30px rgba(20,25,40,0.08);
            padding:28px;
        }

        h1{font-size:20px;margin:0 0 8px}
        p.lead{margin:0 0 20px;color:var(--muted);font-size:14px}

        form{
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:16px 20px;
        }

        label{display:block;font-size:13px;margin-bottom:6px;color:#111827}
        .field{display:flex;flex-direction:column}

        input[type=text], input[type=date], input[type=file], textarea, select, input[type=color]{
            padding:10px 12px;
            border:1px solid #e6e9ef;
            border-radius:10px;
            font-size:14px;
        }

        textarea{min-height:96px;resize:vertical}
        .full{grid-column:1/-1}

        .gender-row{display:flex;gap:12px;align-items:center}
        .checkbox-grid{display:flex;flex-wrap:wrap;gap:8px}
        .checkbox-grid label{display:flex;gap:8px;align-items:center;background:#f8fafc;border:1px solid #eef2ff;padding:8px 10px;border-radius:8px;font-size:13px}

        .controls{display:flex;gap:10px;justify-content:flex-end;grid-column:1/-1;margin-top:6px}
        button{padding:10px 16px;border-radius:10px;border:0;font-weight:600;cursor:pointer}
        button.save{background:var(--accent);color:white}
        button.reset{background:#fff;border:1px solid #d1d5db;color:#374151}

        .consent{display:flex;gap:10px;align-items:center}

        @media(max-width:760px){form{grid-template-columns:1fr;} .controls{justify-content:stretch}}

    </style>
</head>
<body>
  <div class="container">
    <h1>แบบฟอร์มสมัคร</h1>
    <p class="lead">กรุณากรอกข้อมูลให้ครบถ้วน เพื่อใช้ในการติดต่อกลับ</p>

    <form action="#" method="post" enctype="multipart/form-data" novalidate>
      <div class="field">
        <label for="fname">ชื่อ *</label>
        <input id="fname" name="first_name" type="text" placeholder="เช่น สมชาย" required>
      </div>

      <div class="field">
        <label for="lname">สกุล *</label>
        <input id="lname" name="last_name" type="text" placeholder="เช่น ใจดี" required>
      </div>

      <div class="field">
        <label for="dob">วันเดือนปีเกิด</label>
        <input id="dob" name="dob" type="date">
      </div>

      <div class="field">
        <label>เพศ</label>
        <div class="gender-row">
          <label><input type="radio" name="gender" value="male"> ชาย</label>
          <label><input type="radio" name="gender" value="female"> หญิง</label>
          <label><input type="radio" name="gender" value="other"> อื่นๆ</label>
        </div>
      </div>

      <div class="field">
        <label for="photo">รูป (อัปโหลดภาพ)</label>
        <input id="photo" name="photo" type="file" accept="image/*">
      </div>

      <div class="field full">
        <label for="address">ที่อยู่</label>
        <textarea id="address" name="address" placeholder="บ้านเลขที่ / หมู่ / ตำบล / อำเภอ / จังหวัด"></textarea>
      </div>

      <div class="field">
        <label for="favcolor">สีที่ชอบ</label>
        <input id="favcolor" name="favcolor" type="color" value="#4f46e5">
      </div>

      <div class="field">
        <label>แนวเพลงที่ชอบ</label>
        <div class="checkbox-grid">
          <label><input type="checkbox" name="music" value="pop"> Pop</label>
          <label><input type="checkbox" name="music" value="rock"> Rock</label>
          <label><input type="checkbox" name="music" value="hiphop"> Hip-hop</label>
          <label><input type="checkbox" name="music" value="jazz"> Jazz</label>
          <label><input type="checkbox" name="music" value="country"> Country</label>
          <label><input type="checkbox" name="music" value="classical"> Classical</label>
        </div>
      </div>

      <div class="field full">
        <label class="consent"><input type="checkbox" name="agree" required> ข้าพเจ้ายินยอมให้เก็บข้อมูลส่วนบุคคล</label>
      </div>

      <div class="controls full">
        <button type="reset" class="reset">รีเซ็ต</button>
        <button type="submit" class="save">บันทึก</button>
      </div>
    </form>
  </div>
</body>
</html>

