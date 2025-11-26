import { useState, type ChangeEvent, type FormEvent } from 'react'
import '../App.css'

function LoginPage() {
  const [email, setEmail] = useState<string>("")
  const [password , setPassword] = useState<string>("")

  function onChangeEmail(e: ChangeEvent<HTMLInputElement>){
    setEmail(e.target.value.trim())
  }

  function onChnagePassword(e: ChangeEvent<HTMLInputElement>){
    setPassword(e.target.value.trim())
  }

  async function onSubmit(e: FormEvent<HTMLFormElement>){ 
    e.preventDefault()
    try {
      const request = await fetch("http://localhost:8000/api/login", {
        method: "POST",
        body: JSON.stringify({
          email,
          password
        })
      })

      const reponse = await request.json()
      cookieStore.set("token", reponse.token)
      
    } catch (error) {
      console.log(error)
    }
  }
  
  //JSX 
  return (
    <>
      <div className='bg-green-400 w-full h-screen flex justify-center items-center'>
        <section className='bg-white p-2'>

          <h1 className='mb-1'>Login</h1>
          <form 
            action=""
            onSubmit={onSubmit}
          >
            <input 
              className='block border mb-3 outline border-black rounded-md p-1' 
              type="email" 
              placeholder='email'
              onChange={onChangeEmail}  
            />
            <input 
              className='block border mb-3 outline border-black rounded-md p-1' 
              type="password" 
              placeholder='password'
              onChange={onChnagePassword}
            />
            <button 
              className='bg-blue-400 p-2 rounded-md w-full'
            >
                Send
            </button>
          </form>

        </section>
      </div>
    </>
  )
}

export default LoginPage
