@extends('layouts.main')

@section('title', 'Inicio | Altamar')

@section('content')

    <!-- Hero -->
    <section class="relative overflow-hidden">
      <div
        class="absolute inset-0 -z-10 bg-gradient-to-b from-brand-50 via-white to-white"
      ></div>
      <div class="container mx-auto px-4 py-20">
        <div class="grid md:grid-cols-2 items-center gap-10">
          <div>
            <span
              class="inline-flex items-center gap-2 rounded-full border border-brand-200 bg-white px-3 py-1 text-xs font-semibold text-brand-700"
            >
              <span class="h-2 w-2 rounded-full bg-brand-500"></span>
              Web profesional + Marketing que convierte
            </span>
            <h1
              class="mt-4 text-4xl md:text-6xl font-extrabold leading-tight tracking-tight"
            >
              Creamos <span class="text-brand-600">sitios web</span> que venden
              y <span class="text-brand-600">campañas</span> que escalan
            </h1>
            <p class="mt-4 text-lg text-slate-600 max-w-prose">
              Diseño y desarrollo web modernos con SEO técnico, más estrategias
              de marketing digital para atraer clientes y multiplicar tus
              resultados.
            </p>
            <div class="mt-6 flex flex-wrap gap-3">
              <a
                href="#contacto"
                class="inline-flex items-center rounded-xl bg-brand-600 px-5 py-3 font-semibold text-white shadow-soft hover:bg-brand-700"
                >Empezar ahora</a
              >
              <a
                href="#portafolio"
                class="inline-flex items-center rounded-xl border border-slate-300 px-5 py-3 font-semibold hover:bg-slate-100"
                >Ver portafolio</a
              >
            </div>
            <div class="mt-6 flex items-center gap-6 text-sm text-slate-600">
              <div class="flex items-center gap-2">
                <span class="h-2.5 w-2.5 rounded-full bg-emerald-500"></span>
                Entregas en tiempo
              </div>
              <div class="flex items-center gap-2">
                <span class="h-2.5 w-2.5 rounded-full bg-indigo-500"></span>
                Resultados medibles
              </div>
            </div>
          </div>
          <div class="relative">
            <div
              class="aspect-[4/3] w-full rounded-3xl bg-gradient-to-tr from-slate-100 to-brand-100 shadow-soft border border-slate-200 p-4"
            >
              <div class="grid h-full w-full grid-cols-2 gap-4">
                <div
                  class="rounded-2xl bg-white shadow-soft border border-slate-200 p-4 flex flex-col justify-between"
                >
                  <div>
                    <div class="text-xs font-semibold text-slate-500">
                      Vista previa
                    </div>
                    <div class="mt-2 h-24 rounded-xl bg-slate-100"></div>
                  </div>
                  <div class="mt-4 flex justify-between text-xs text-slate-500">
                    <span>UX/UI</span><span>Responsive</span>
                  </div>
                </div>
                <div
                  class="rounded-2xl bg-white shadow-soft border border-slate-200 p-4 flex flex-col justify-between"
                >
                  <div>
                    <div class="text-xs font-semibold text-slate-500">
                      Panel métricas
                    </div>
                    <div class="mt-2 h-24 rounded-xl bg-slate-100"></div>
                  </div>
                  <div class="mt-4 flex justify-between text-xs text-slate-500">
                    <span>SEO</span><span>Ads</span>
                  </div>
                </div>
                <div
                  class="col-span-2 rounded-2xl bg-white shadow-soft border border-slate-200 p-4"
                >
                  <div class="flex items-center justify-between">
                    <div class="text-xs font-semibold text-slate-500">
                      Campaña activa
                    </div>
                    <div class="text-xs text-emerald-600 font-semibold">
                      +238% ROI
                    </div>
                  </div>
                  <div class="mt-2 h-24 rounded-xl bg-slate-100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Servicios -->
    <section id="servicios" class="py-20">
      <div class="container mx-auto px-4">
        <div class="mx-auto max-w-3xl text-center">
          <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight">
            Servicios
          </h2>
          <p class="mt-3 text-slate-600">
            Nos enfocamos en dos áreas clave para impulsar tu negocio.
          </p>
        </div>
        <div class="mt-10 grid gap-6 md:grid-cols-2">
          <!-- Desarrollo Web y Diseño -->
          <div
            class="rounded-3xl border border-slate-200 bg-white p-8 shadow-soft"
          >
            <div class="flex items-start gap-4">
              <div
                class="h-12 w-12 rounded-2xl bg-brand-600 text-white grid place-items-center font-bold"
              >
                W
              </div>
              <div>
                <h3 class="text-xl font-bold">Desarrollo Web & Diseño</h3>
                <p class="mt-2 text-slate-600">
                  Sitios rápidos, seguros y responsivos con diseño UX/UI
                  centrado en conversión.
                </p>
                <ul
                  class="mt-4 grid gap-2 text-sm text-slate-700 list-disc pl-5"
                >
                  <li>Web corporativa y landing pages</li>
                  <li>E‑commerce (tiendas en línea)</li>
                  <li>UX/UI, maquetación y componentes</li>
                  <li>Optimización de velocidad y SEO técnico</li>
                </ul>
                <a
                  href="#contacto"
                  class="mt-6 inline-flex rounded-xl bg-slate-900 px-4 py-2 text-white font-semibold hover:bg-slate-800"
                  >Quiero mi web</a
                >
              </div>
            </div>
          </div>
          <!-- Marketing Digital -->
          <div
            class="rounded-3xl border border-slate-200 bg-white p-8 shadow-soft"
          >
            <div class="flex items-start gap-4">
              <div
                class="h-12 w-12 rounded-2xl bg-emerald-600 text-white grid place-items-center font-bold"
              >
                M
              </div>
              <div>
                <h3 class="text-xl font-bold">Marketing Digital</h3>
                <p class="mt-2 text-slate-600">
                  Estrategias para atraer, convertir y retener clientes con
                  resultados medibles.
                </p>
                <ul
                  class="mt-4 grid gap-2 text-sm text-slate-700 list-disc pl-5"
                >
                  <li>Campañas en Google Ads y Meta Ads</li>
                  <li>Gestión de redes sociales</li>
                  <li>Email marketing y automatizaciones</li>
                  <li>Analítica y reporting</li>
                </ul>
                <a
                  href="#contacto"
                  class="mt-6 inline-flex rounded-xl bg-emerald-600 px-4 py-2 text-white font-semibold hover:bg-emerald-700"
                  >Quiero más clientes</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Beneficios -->
    <section class="py-16">
      <div class="container mx-auto px-4">
        <div class="rounded-3xl bg-slate-900 text-white p-10 shadow-soft">
          <div class="grid md:grid-cols-4 gap-6">
            <div>
              <div class="text-3xl font-extrabold">+120</div>
              <div class="mt-1 text-sm opacity-80">Proyectos entregados</div>
            </div>
            <div>
              <div class="text-3xl font-extrabold">98%</div>
              <div class="mt-1 text-sm opacity-80">
                Satisfacción de clientes
              </div>
            </div>
            <div>
              <div class="text-3xl font-extrabold">2‑4 semanas</div>
              <div class="mt-1 text-sm opacity-80">
                Tiempo típico de entrega
              </div>
            </div>
            <div>
              <div class="text-3xl font-extrabold">ROI +200%</div>
              <div class="mt-1 text-sm opacity-80">Campañas optimizadas</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Portafolio -->
    <section id="portafolio" class="py-20">
      <div class="container mx-auto px-4">
        <div class="mx-auto max-w-3xl text-center">
          <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight">
            Portafolio
          </h2>
          <p class="mt-3 text-slate-600">
            Algunas muestras representativas de nuestro trabajo.
          </p>
        </div>
        <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
          <!-- Tarjeta 1 -->
          <article
            class="group overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-soft"
          >
            <div class="aspect-[16/10] bg-slate-100"></div>
            <div class="p-5">
              <h3 class="font-bold">E‑commerce de moda</h3>
              <p class="mt-1 text-sm text-slate-600">
                +35% ventas en 90 días con Ads y optimización UX.
              </p>
            </div>
          </article>
          <!-- Tarjeta 2 -->
          <article
            class="group overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-soft"
          >
            <div class="aspect-[16/10] bg-slate-100"></div>
            <div class="p-5">
              <h3 class="font-bold">Startup B2B SaaS</h3>
              <p class="mt-1 text-sm text-slate-600">
                Landing de conversión + SEO técnico.
              </p>
            </div>
          </article>
          <!-- Tarjeta 3 -->
          <article
            class="group overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-soft"
          >
            <div class="aspect-[16/10] bg-slate-100"></div>
            <div class="p-5">
              <h3 class="font-bold">Restaurante</h3>
              <p class="mt-1 text-sm text-slate-600">
                Reservas online y contenido social.
              </p>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- Proceso -->
    <section id="proceso" class="py-20 bg-white">
      <div class="container mx-auto px-4">
        <div class="mx-auto max-w-3xl text-center">
          <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight">
            Nuestro proceso
          </h2>
        </div>
        <ol class="mt-10 grid gap-6 md:grid-cols-5">
          <li class="rounded-3xl border border-slate-200 bg-slate-50 p-6">
            <div class="text-sm text-slate-500">Paso 1</div>
            <div class="mt-1 font-bold">Descubrimiento</div>
            <p class="mt-2 text-sm text-slate-600">
              Objetivos, audiencia y alcance.
            </p>
          </li>
          <li class="rounded-3xl border border-slate-200 bg-slate-50 p-6">
            <div class="text-sm text-slate-500">Paso 2</div>
            <div class="mt-1 font-bold">Propuesta</div>
            <p class="mt-2 text-sm text-slate-600">
              Plan, cronograma y costos.
            </p>
          </li>
          <li class="rounded-3xl border border-slate-200 bg-slate-200 p-6">
            <div class="text-sm text-slate-700">Paso 3</div>
            <div class="mt-1 font-bold">Diseño & Desarrollo</div>
            <p class="mt-2 text-sm text-slate-700">Iteraciones y QA.</p>
          </li>
          <li class="rounded-3xl border border-slate-200 bg-slate-50 p-6">
            <div class="text-sm text-slate-500">Paso 4</div>
            <div class="mt-1 font-bold">Lanzamiento</div>
            <p class="mt-2 text-sm text-slate-600">Deploy y analítica.</p>
          </li>
          <li class="rounded-3xl border border-slate-200 bg-slate-50 p-6">
            <div class="text-sm text-slate-500">Paso 5</div>
            <div class="mt-1 font-bold">Optimización</div>
            <p class="mt-2 text-sm text-slate-600">Escalamiento y mejoras.</p>
          </li>
        </ol>
      </div>
    </section>

    <!-- Precios -->
    <section id="precios" class="py-20">
      <div class="container mx-auto px-4">
        <div class="mx-auto max-w-3xl text-center">
          <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight">
            Planes
          </h2>
          <p class="mt-3 text-slate-600">
            Opcional: paquetes de referencia. Cotizaciones personalizadas
            disponibles.
          </p>
        </div>
        <div class="mt-10 grid gap-6 md:grid-cols-3">
          <!-- Básico -->
          <div
            class="rounded-3xl border border-slate-200 bg-white p-8 shadow-soft"
          >
            <h3 class="text-xl font-bold">Lanzamiento</h3>
            <div class="mt-3 text-4xl font-extrabold">$</div>
            <ul class="mt-4 space-y-2 text-sm text-slate-700">
              <li>Landing page</li>
              <li>SEO técnico base</li>
              <li>1 campaña inicial</li>
            </ul>
            <a
              href="#contacto"
              class="mt-6 inline-flex w-full justify-center rounded-xl bg-slate-900 px-4 py-2 text-white font-semibold hover:bg-slate-800"
              >Elegir</a
            >
          </div>
          <!-- Estándar -->
          <div
            class="rounded-3xl border-2 border-brand-600 bg-white p-8 shadow-soft"
          >
            <div
              class="inline-flex items-center gap-2 rounded-full bg-brand-100 px-3 py-1 text-xs font-semibold text-brand-700"
            >
              Más popular
            </div>
            <h3 class="mt-3 text-xl font-bold">Crecimiento</h3>
            <div class="mt-3 text-4xl font-extrabold">$$</div>
            <ul class="mt-4 space-y-2 text-sm text-slate-700">
              <li>Web multi‑sección o tienda</li>
              <li>Integraciones y analítica</li>
              <li>Gestión mensual de Ads</li>
            </ul>
            <a
              href="#contacto"
              class="mt-6 inline-flex w-full justify-center rounded-xl bg-brand-600 px-4 py-2 text-white font-semibold hover:bg-brand-700"
              >Elegir</a
            >
          </div>
          <!-- Premium -->
          <div
            class="rounded-3xl border border-slate-200 bg-white p-8 shadow-soft"
          >
            <h3 class="text-xl font-bold">Escala</h3>
            <div class="mt-3 text-4xl font-extrabold">$$$</div>
            <ul class="mt-4 space-y-2 text-sm text-slate-700">
              <li>Diseño a medida y performance</li>
              <li>Automatizaciones de marketing</li>
              <li>Optimización y reporting avanzado</li>
            </ul>
            <a
              href="#contacto"
              class="mt-6 inline-flex w-full justify-center rounded-xl bg-slate-900 px-4 py-2 text-white font-semibold hover:bg-slate-800"
              >Elegir</a
            >
          </div>
        </div>
      </div>
    </section>

    <!-- Nosotros -->
    <section id="nosotros" class="py-20">
      <div class="container mx-auto px-4">
        <div class="grid items-center gap-10 md:grid-cols-2">
          <div>
            <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight">
              Sobre nosotros
            </h2>
            <p class="mt-4 text-slate-600">
              Somos un equipo apasionado por construir productos digitales que
              combinan diseño atractivo, código de calidad y estrategias de
              marketing orientadas a resultados.
            </p>
            <ul class="mt-4 grid gap-2 text-sm text-slate-700 list-disc pl-5">
              <li>Foco en conversión y crecimiento</li>
              <li>Transparencia y comunicación constante</li>
              <li>Soporte posterior al lanzamiento</li>
            </ul>
          </div>
          <div
            class="aspect-[4/3] w-full rounded-3xl bg-slate-200 shadow-soft"
          ></div>
        </div>
      </div>
    </section>

    <!-- CTA Contacto -->
    <section id="contacto" class="py-20">
      <div class="container mx-auto px-4">
        <div
          class="rounded-3xl border border-slate-200 bg-white p-10 shadow-soft"
        >
          <div class="grid md:grid-cols-2 gap-8 items-center">
            <div>
              <h2 class="text-3xl font-extrabold tracking-tight">
                ¿Listo para impulsar tu negocio?
              </h2>
              <p class="mt-3 text-slate-600">
                Cuéntanos sobre tu proyecto y te enviaremos una propuesta en
                menos de 24 horas.
              </p>
              <div class="mt-6 space-y-2 text-sm text-slate-700">
                <div class="flex items-center gap-2">
                  <span class="h-2.5 w-2.5 rounded-full bg-emerald-500"></span>
                  Atención por WhatsApp y email
                </div>
                <div class="flex items-center gap-2">
                  <span class="h-2.5 w-2.5 rounded-full bg-indigo-500"></span>
                  Reunión inicial gratis
                </div>
              </div>
            </div>
            <form class="grid gap-4">
              <div class="grid sm:grid-cols-2 gap-4">
                <label class="grid gap-1 text-sm">
                  <span>Nombre</span>
                  <input
                    type="text"
                    required
                    class="rounded-xl border border-slate-300 bg-white px-4 py-2 outline-none focus:ring-2 focus:ring-brand-500"
                    placeholder="Tu nombre"
                  />
                </label>
                <label class="grid gap-1 text-sm">
                  <span>Email</span>
                  <input
                    type="email"
                    required
                    class="rounded-xl border border-slate-300 bg-white px-4 py-2 outline-none focus:ring-2 focus:ring-brand-500"
                    placeholder="tu@email.com"
                  />
                </label>
              </div>
              <label class="grid gap-1 text-sm">
                <span>Servicio de interés</span>
                <select
                  class="rounded-xl border border-slate-300 bg-white px-4 py-2 outline-none focus:ring-2 focus:ring-brand-500"
                >
                  <option>Desarrollo Web & Diseño</option>
                  <option>Marketing Digital</option>
                </select>
              </label>
              <label class="grid gap-1 text-sm">
                <span>Mensaje</span>
                <textarea
                  rows="4"
                  class="rounded-xl border border-slate-300 bg-white px-4 py-2 outline-none focus:ring-2 focus:ring-brand-500"
                  placeholder="Cuéntanos tu proyecto..."
                ></textarea>
              </label>
              <div class="flex items-center gap-3">
                <button
                  type="submit"
                  class="inline-flex items-center rounded-xl bg-brand-600 px-5 py-3 font-semibold text-white shadow-soft hover:bg-brand-700"
                >
                  Enviar solicitud
                </button>
                <a
                  href="mailto:hola@agencia.dev"
                  class="text-sm underline hover:no-underline"
                  >o escríbenos a hola@agencia.dev</a
                >
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    
@endsection
