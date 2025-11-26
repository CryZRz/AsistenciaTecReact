import { BrowserRouter as Router, useRoutes } from "react-router-dom"
import LoginPage from "./pages/LoginPage"

function App() {

  function AppRoutes(){
    const routes = useRoutes([
      {
        path:"/login", 
        element: <LoginPage/>
      }
    ])

    return routes
  }

  return (
    <Router>
      <AppRoutes/>
    </Router>
  )
}

export default App
