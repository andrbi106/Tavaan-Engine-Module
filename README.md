# Tavaan Engine — Module

> **کشف و مدیریت ماژول** — موتور Module در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.module` |
| نام | `Module` |
| عنوان فارسی | کشف و مدیریت ماژول |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\Module` |
| نوع | `engine` |

## خطاها (Exceptions)

- `Tavaan\Engine\Module\Exceptions\CircularModuleDependencyException`
- `Tavaan\Engine\Module\Exceptions\ModuleException`

## Facadeها

- `Tavaan\Engine\Module\Facades\Module`

## کلاس‌های اصلی

- `src/Console/KitInstallCommand.php`
- `src/Console/KitListCommand.php`
- `src/Kit/KitException.php`
- `src/Kit/KitManager.php`
- `src/Kit/KitManifest.php`
- `src/Manifest.php`
- `src/ManifestParser.php`
- `src/Module.php`
- `src/ModuleManager.php`
- `src/ModuleRegistry.php`
- `src/ModuleRunner.php`
- `src/ModuleServiceProvider.php`
- `src/TopologicalSorter.php`

## Service Providerها

- `Tavaan\Engine\Module\ModuleServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `container`
- `config`

## پیکربندی

- فایل پیکربندی: `config/module.php`
- کلید: `module`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-Module.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-Module`** (این مخزن) | موتور Module |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
