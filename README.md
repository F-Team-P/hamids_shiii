# املاک امید | Amlak Omid

قالب وردپرسی فارسی و **راست‌چین** برای آژانس املاک «**املاک امید**» با تأکید بر
**میراث نیم‌قرنی** (تأسیس ۱۳۵۴). این مخزن **سه نسخهٔ طراحی** از صفحهٔ نخست را ارائه می‌دهد.

A Persian, **RTL** WordPress theme for the **Amlak Omid** real-estate agency, celebrating
**50+ years of heritage** (established **1354 / 1975**). This repo ships **three design
variants** of the home page, each a complete, installable theme.

---

## 🎨 سه نسخه — Three variants

| نسخه / Variant | پوشهٔ قالب / Theme folder | پیش‌نمایش / Preview | حال‌وهوا |
|---|---|---|---|
| **سنتی ایرانی** — Traditional Persian | `wp-content/themes/amlak-omid` | `preview/index.html` | فیروزه‌ای/خاک‌رس/طلایی، کاشی و گره‌چینی |
| **کلاسیک و فاخر** — Classic prestige | `wp-content/themes/amlak-omid-classic` | `preview/classic.html` | سرمه‌ای و طلایی، خط نسخ (Amiri)، نشان ستون‌دار |
| **مدرن** — Modern + heritage | `wp-content/themes/amlak-omid-modern` | `preview/modern.html` | سفید/فیروزه‌ای امروزی، نشان‌های طلایی میراث |

> هر سه از **همان ساختار قالب و محتوا** استفاده می‌کنند و فقط در لایهٔ طراحی (رنگ، فونت،
> نقش‌ها) تفاوت دارند. Each variant shares the same template structure and content and differs
> only in the design layer (palette, fonts, motifs).

---

## 🚀 پیش‌نمایش سریع (بدون وردپرس) — Quick preview, no WordPress needed

برای مقایسهٔ هر سه نسخه، این صفحه را در مرورگر باز کنید:

```
preview/compare.html
```

یا هر نسخه را جداگانه: `preview/index.html` (سنتی)، `preview/classic.html` (کلاسیک)،
`preview/modern.html` (مدرن). این صفحه‌های ایستا دقیقاً همان صفحهٔ نخست قالب‌ها هستند و از
همان CSS/JS واقعی استفاده می‌کنند.

> Open **`preview/compare.html`** to compare all three, or open any variant directly. They are
> static renders that use each theme's real CSS/JS. (Web fonts load from Google Fonts, so use an
> internet connection for the exact Persian typography; otherwise it falls back to Tahoma.)

برای اطمینان از بارگذاری فونت‌ها می‌توانید یک سرور محلی سبک اجرا کنید:

```bash
# از ریشهٔ مخزن / from the repo root
python3 -m http.server 8000
# سپس باز کنید / then open:  http://localhost:8000/preview/compare.html
```

---

## 🧩 نصب روی وردپرس — Install on WordPress

ساختار پروژه به‌گونه‌ای است که پوشهٔ قالب در مسیر استاندارد وردپرس قرار دارد:

```
wp-content/themes/amlak-omid/
```

> برای نسخه‌های دیگر، نام پوشه را جایگزین کنید: `amlak-omid-classic` یا `amlak-omid-modern`.
> هر سه را می‌توان هم‌زمان آپلود کرد و از **نمایش ← پوسته‌ها** بین آن‌ها جابه‌جا شد.
> For the other variants, swap the folder name to `amlak-omid-classic` or `amlak-omid-modern`.
> All three can be uploaded together and switched from *Appearance → Themes*.

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
