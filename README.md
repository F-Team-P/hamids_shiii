# املاک امید | Amlak Omid

قالب وردپرسی فارسی و **راست‌چین** برای آژانس املاک «**املاک امید**» با طراحی **سنتی ایرانی**
(کاشی و گره‌چینی) و تأکید بر **میراث نیم‌قرنی** (تأسیس ۱۳۵۴).

A Persian, **RTL** WordPress theme for the **Amlak Omid** real-estate agency, with a
**traditional-Persian** look (tilework / girih motifs) celebrating **50+ years of heritage**
(established **1354 / 1975**).

---

## ✦ نسخهٔ «نفیس» (Royale) — a distinct luxury layout

این شاخه علاوه بر قالب پایه، یک **چیدمان کاملاً متفاوت و لوکس** هم دارد: نسخهٔ **نفیس** با
حال‌وهوای **شامپاینی و فاخر** — مشکیِ گرم (اسپرسو) و طلایی شامپاینی، خوش‌نویسی نستعلیق (Gulzar)،
هیروی تمام‌صفحه با حباب‌های شامپاین، گالری افقی املاک، و چیدمان مجله‌ای. این نسخه صرفاً تغییر رنگ
نیست؛ ساختار، تایپوگرافی و تعامل‌ها همگی نو هستند.

- **قالب / Theme:** `wp-content/themes/amlak-omid-royale`
- **پیش‌نمایش / Preview:** `preview/royale.html`

> A wholly different, **champagne‑luxury** layout (the *Royale* variant): warm espresso black +
> champagne gold, a Nastaliq wordmark, a full‑viewport cinematic hero with rising champagne
> bubbles, a horizontal property collection, an expansive heritage statement and an editorial
> services index. Not a recolor — new structure, type system and interactions.

---

## 🚀 پیش‌نمایش سریع (بدون وردپرس) — Quick preview, no WordPress needed

این فایل‌ها را در مرورگر باز کنید: `preview/index.html` (سنتی) و `preview/royale.html` (نفیس/لوکس).

```
preview/index.html     ·     preview/royale.html
```

این صفحهٔ ایستا دقیقاً همان صفحهٔ نخست قالب است و از همان CSS/JS واقعی استفاده می‌کند.

> Just open **`preview/index.html`** in any browser. It is a static render of the home page
> and uses the theme's real CSS/JS. (Web fonts load from Google Fonts, so use an internet
> connection for the exact Persian typography; otherwise it falls back to Tahoma.)

برای اطمینان از بارگذاری فونت‌ها می‌توانید یک سرور محلی سبک اجرا کنید:

```bash
# از ریشهٔ مخزن / from the repo root
python3 -m http.server 8000
# سپس باز کنید / then open:  http://localhost:8000/preview/
```

---

## 🧩 نصب روی وردپرس — Install on WordPress

ساختار پروژه به‌گونه‌ای است که پوشهٔ قالب در مسیر استاندارد وردپرس قرار دارد:

```
wp-content/themes/amlak-omid/
```

**روش ۱ — کپی مستقیم:** کل پوشهٔ `wp-content/themes/amlak-omid` را در نصب وردپرس خود کپی کنید.

**روش ۲ — بسته‌بندی و آپلود از پیشخوان:**

```bash
cd wp-content/themes
zip -r amlak-omid.zip amlak-omid
# سپس در پیشخوان وردپرس:  نمایش ← پوسته‌ها ← افزودن ← بارگذاری پوسته
```

سپس:

1. پوستهٔ **«املاک امید»** را فعال کنید.
2. به **تنظیمات ← خواندن**، گزینهٔ «صفحهٔ نخست شما نمایش دهد: یک برگهٔ ثابت» را انتخاب کنید
   (یا به‌صورت پیش‌فرض `front-page.php` به‌طور خودکار به‌عنوان صفحهٔ اصلی استفاده می‌شود).
3. منوها را از **نمایش ← فهرست‌ها** بسازید و به جایگاه «منوی اصلی» اختصاص دهید.
4. متن‌های صفحهٔ نخست و اطلاعات تماس را از **نمایش ← سفارشی‌سازی ← تنظیمات املاک امید** ویرایش کنید.

> **WordPress:** copy `wp-content/themes/amlak-omid` into your install (or zip it and upload via
> *Appearance → Themes → Add New → Upload Theme*), activate **املاک امید**, then edit the hero
> copy, founding year and contact details under *Appearance → Customize → تنظیمات املاک امید*.

---

## 🏠 افزودن املاک — Adding properties

پس از فعال‌سازی، نوع‌محتوای **«املاک»** (`property`) به پیشخوان اضافه می‌شود:

- برای هر ملک: عنوان، توضیحات، تصویر شاخص و **مشخصات ملک** (قیمت، متراژ، اتاق، سال ساخت، برچسب) را وارد کنید.
- دسته‌بندی‌ها: **نوع ملک**، **نوع معامله** و **محله/منطقه**.
- صفحهٔ نخست به‌طور خودکار تا ۶ ملک منتشرشده را در بخش «املاک ویژه» نشان می‌دهد؛
  تا وقتی ملکی ثبت نشده، نمونه‌های نمایشی نشان داده می‌شوند.

> A `property` custom post type (with type / deal / location taxonomies and a details meta box)
> is registered automatically. The home page shows up to 6 published properties in *املاک ویژه*,
> falling back to demo listings until you add your own.

---

## 🎨 طراحی — Design notes

| | |
|---|---|
| **سبک / Style** | سنتی ایرانی — Traditional Persian (کاشی و گره‌چینی) |
| **رنگ‌ها / Palette** | فیروزه‌ای، لاجوردی، خاک‌رس و طلایی روی کرم (turquoise · lapis · terracotta · gold on cream) |
| **فونت / Fonts** | Vazirmatn (متن/UI) + Lalezar (تیترهای نمایشی) |
| **جهت / Direction** | کاملاً راست‌چین (full RTL) |
| **نشان میراث / Heritage** | مهر «تأسیس ۱۳۵۴»، تایم‌لاین ۱۳۵۴ → ۱۴۰۴، شمارندهٔ «۵۰+ سال» |

تمام نقش‌های هندسی (`assets/img/*.svg`) به‌صورت بُرداری و سبک ساخته شده‌اند و مسیر آن‌ها در
`main.css` نسبت به خود فایل CSS تعریف شده تا هم در وردپرس و هم در پیش‌نمایش ایستا درست کار کند.

---

## 📁 ساختار فایل‌ها — File structure

```
.
├── preview/
│   └── index.html                     # پیش‌نمایش ایستای صفحهٔ نخست
└── wp-content/themes/amlak-omid/
    ├── style.css                      # هدر قالب (الزامی وردپرس)
    ├── functions.php                  # راه‌اندازی، فونت‌ها، منوها، توابع کمکی
    ├── front-page.php                 # صفحهٔ نخست (مونتاژ بخش‌ها)
    ├── header.php  · footer.php
    ├── index.php · page.php · single.php · 404.php · searchform.php
    ├── inc/
    │   ├── property-cpt.php           # نوع‌محتوای «املاک» + دسته‌بندی‌ها + متاباکس
    │   └── customizer.php             # تنظیمات سفارشی‌سازی (میراث/تماس)
    ├── template-parts/home/
    │   ├── hero.php · stats.php · heritage.php · services.php
    │   ├── featured-properties.php · why-us.php · testimonials.php · cta.php
    └── assets/
        ├── css/main.css               # کل سیستم طراحی
        ├── js/main.js                 # منوی موبایل، شمارنده‌ها، اسکرول‌ریویل
        └── img/                       # نقش‌های گره‌چینی، نوار کاشی، مهر
```

---

## ✅ سازگاری — Compatibility

- WordPress 6.0+ · PHP 7.4+
- راست‌چین، واکنش‌گرا (موبایل/تبلت/دسکتاپ) و سازگار با `prefers-reduced-motion`.
- فرم‌های صفحهٔ نخست در حالت نمایشی هستند؛ برای ارسال واقعی، یک افزونهٔ فرم (مثل Contact Form 7)
  یا کد سفارشی به آن‌ها متصل کنید.
