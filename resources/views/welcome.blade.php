@extends('layouts.main')

@section('title', 'Inicio | D&A Software R')

@section('content')

    <!-- Hero -->
    <section class="relative overflow-hidden">
      <div
        class="absolute inset-0 -z-10 bg-gradient-to-b from-brand-50 via-white to-white"
      ></div>
      <div class="container mx-auto px-4 py-20">
        <div class="grid md:grid-cols-2 items-center gap-10">
          <div>
            <!-- Badge / Destacado -->
            <span
              class="inline-flex items-center gap-2 rounded-full border border-brand-200 bg-white px-3 py-1 text-xs font-semibold text-brand-700"
            >
              <span class="h-2 w-2 rounded-full bg-brand-500"></span>
              Desarrollo de Apps & Sitios Web Profesionales
            </span>

            <!-- Título principal -->
            <h1 class="mt-4 text-4xl md:text-6xl font-extrabold leading-tight tracking-tight">
              Creamos <span class="text-brand-600">sitios web</span> y <span class="text-brand-600">apps móviles</span>  
              modernas que <span class="text-brand-600">impulsan tu negocio</span>
            </h1>

            <!-- Subtítulo / Descripción SEO -->
            <p class="mt-4 text-lg text-slate-600 max-w-prose">
              Desarrollo de sitios web y aplicaciones rápidas, seguras y optimizadas para Google,  
              con diseño funcional y experiencia de usuario excepcional.
            </p>
            <div class="mt-6 flex flex-wrap gap-3">
              <a
                href="#contacto"
                class="inline-flex items-center rounded-xl bg-brand-600 px-5 py-3 font-semibold text-white shadow-soft hover:bg-brand-700"
                >Comienza tu proyecto</a
              >
              <a
                href="#portafolio"
                class="inline-flex items-center rounded-xl border border-slate-300 px-5 py-3 font-semibold hover:bg-slate-100"
                >Explora nuestro portafolio</a
              >
            </div>
            <div class="mt-6 flex items-center gap-6 text-sm text-slate-600">
              <div class="flex items-center gap-2">
                <span class="h-2.5 w-2.5 rounded-full bg-emerald-500"></span>
                Entregas puntuales
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
              <h3 class="font-bold">Mega servicios</h3>
              <p class="mt-1 text-sm text-slate-600">
                Software para la gestión y administración de medicamentos, cuenta con diferentes conexiones a bases de datos de proveedores obteniendo un catálogo de precios y productos optimizado.
              </p>
            </div>
          </article>
          <!-- Tarjeta 2 -->
          <article
            class="group overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-soft"
          >
            <div class="aspect-[16/10] bg-slate-100"></div>
            <div class="p-5">
              <h3 class="font-bold">CECAUV</h3>
              <p class="mt-1 text-sm text-slate-600">
                A. I. R. E.
                (Auxiliar en la Intervención para RCP Efectiva)
                Tiene como objetivo la reanimación cardiopulmonar de calidad para público en general, que no cuenta con conocimientos técnicos para realizar RCP de manera automática.
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
            <div class="mt-1 font-bold">Idea</div>
            <p class="mt-2 text-sm text-slate-600">
              Definimos objetivos, identificamos tu audiencia y delimitamos el alcance del proyecto.
            </p>
          </li>
          <li class="rounded-3xl border border-slate-200 bg-slate-50 p-6">
            <div class="text-sm text-slate-500">Paso 2</div>
            <div class="mt-1 font-bold">Diseño</div>
            <p class="mt-2 text-sm text-slate-600">
              Creamos wireframes, mockups y planificamos cronograma y presupuesto.
            </p>
          </li>
          <li class="rounded-3xl border border-slate-200 bg-slate-200 p-6">
            <div class="text-sm text-slate-700">Paso 3</div>
            <div class="mt-1 font-bold">Codificación</div>
            <p class="mt-2 text-sm text-slate-700">
              Desarrollamos funcionalidades, realizamos iteraciones y aseguramos calidad con pruebas QA.
            </p>
          </li>
          <li class="rounded-3xl border border-slate-200 bg-slate-50 p-6">
            <div class="text-sm text-slate-500">Paso 4</div>
            <div class="mt-1 font-bold">Entrega</div>
            <p class="mt-2 text-sm text-slate-600">
              Implementamos el proyecto, realizamos deploy y configuramos analíticas para medir resultados.
            </p>
          </li>
          <li class="rounded-3xl border border-slate-200 bg-slate-50 p-6">
            <div class="text-sm text-slate-500">Paso 5</div>
            <div class="mt-1 font-bold">Mantenimiento</div>
            <p class="mt-2 text-sm text-slate-600">
              Ofrecemos soporte continuo, escalamiento y mejoras para mantener tu proyecto actualizado.
            </p>
          </li>
        </ol>
      </div>
    </section>

    <!-- Precios -->
    <section id="precios" class="py-20">
      <div class="container mx-auto px-4">
        <div class="mx-auto max-w-3xl text-center">
          <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight">
            Tabla De Precios
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
            <h3 class="text-xl font-bold">Paquete Cursos Online</h3>
            <div class="mt-3 text-4xl font-extrabold">$1,000.00</div>
            <ul class="mt-4 space-y-2 text-sm text-slate-700">
              <li>HTML(HyperText Markup Language)</li>
              <li>CSS (Cascading Style Sheets)</li>
              <li>Java Script (JS)</li>
              <li>WAMPServer (Servidor Virtual)</li>
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
            <h3 class="mt-3 text-xl font-bold">Ecommerce</h3>
            <div class="mt-3 text-4xl font-extrabold">$17,350.00</div>
            <ul class="mt-4 space-y-2 text-sm text-slate-700">
              <li>Diseño de la Ecommerce</li>
              <li>Correos electrónicos ilimitados</li>
              <li>Pasarela de pagos</li>
              <li>50 Productos en tienda virtual</li>
              <li>Conectividad con Android & iOS</li>
              <li>Monitoreo 24/7</li>
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
            <h3 class="text-xl font-bold">Sitio Web</h3>
            <div class="mt-3 text-4xl font-extrabold">$9,350.00</div>
            <ul class="mt-4 space-y-2 text-sm text-slate-700">
              <li>Diseño del Sitio Web</li>
              <li>Correos ilimitados</li>
              <li>Compatibilidad con Android & iOS</li>
              <li>Monitoreo 24/7</li>
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
            <p class="mt-4 text-lg text-slate-600 max-w-prose">
              En D&A Software R nos dedicamos a crear soluciones tecnológicas y de comunicación que impulsan la productividad, la eficiencia y la competitividad de nuestros clientes.  
            </p>
            <ul class="mt-4 grid gap-2 text-sm text-slate-700 list-disc pl-5">
              <li>Nuestro objetivo es desbloquear el potencial tecnológico de todos, ofreciendo desarrollos de software innovadores, confiables y adaptados a cada necesidad. </li>
              <li>Nos guiamos por valores sólidos como la honestidad, responsabilidad, calidad, innovación y originalidad, asegurando resultados excepcionales en cada proyecto.</li>
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
                  href="mailto:rrodriguez@dasoftwarer.com"
                  class="text-sm underline hover:no-underline"
                  >o escríbenos a rrodriguez@dasoftwarer.com</a
                >
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    
@endsection
