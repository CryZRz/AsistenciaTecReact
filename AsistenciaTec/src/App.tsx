import { BrowserRouter as Router, useRoutes } from "react-router-dom"
import LoginPage from "./pages/LoginPage"
import PanelAdmin from "./pages/PanelAdmin"
import { routesPath } from "./utils/Routes"
import GuardDoor from "./pages/GuardDoor"

function App() {

  function AppRoutes(){
    const routes = useRoutes([
      {
        path: routesPath.LOGIN, 
        element: <LoginPage/>
        
      },
      {
        path: "/panel",
        element: <PanelAdmin/>
      },
      {
        path: routesPath.USERS,
        element: <div>Jazmin</div>
      },
      {
        path: routesPath.GUARD_DOOR,
        element: <GuardDoor/>
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
