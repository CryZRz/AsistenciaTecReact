import type { ReactNode } from "react";

export default function FormLayout({children}: {children: ReactNode}) {
  return (
    <div className='bg-cover bg-no-repeat overflow-hidden w-full h-screen flex justify-center items-center bg-[url(https://wallpapercave.com/wp/wp12329545.png)]'>
        <section className='bg-white p-2 w-96'>
          {children}
        </section>
      </div>
  )
}
