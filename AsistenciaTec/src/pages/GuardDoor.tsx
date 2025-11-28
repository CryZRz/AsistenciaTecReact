import { use, useEffect, useState, type ChangeEvent } from "react";
import FormLayout from "./layouts/FormLayout";
import axios from "axios";
import type { CampusResponse } from "../interfaces/responses/CampusResponse";

export default function GuardDoor() {

  const [listCampus, setListCampus] = useState<CampusResponse[]>([])
  const [selectedCampus, setSetselectedCampus] = useState(false)
  const [listDoorsAccess, setListDoorsAccess] = useState([])

  useEffect(() => {
    const getData = async () => {
      const request = await axios.get("http://localhost:8000/api/campus")
      setListCampus(request.data.data)
    }

    getData()
  }, [])

  async function changeCampus(e: ChangeEvent<HTMLSelectElement>){
    try {
      const request = await axios.get(`http://localhost:8000/api/puertas-acceso/${e.target.value}`)
      setListDoorsAccess(request.data)
      setSetselectedCampus(true)
    } catch (error) {
      console.log(error)
    }
  }

  return (
    <FormLayout>
        <div>
            <form action="">
                <label className="block" htmlFor="">Campus</label>
                <select className="block border border-black" name="" id="" onChange={changeCampus}>
                  {
                    listCampus.map(campus => (
                      <option id={campus.id.toString()} value={campus.id}>{campus.name}</option>
                    ))
                  }
                      <option >Jamzin</option>
                </select>
                {
                  selectedCampus ?
                  <>
                    <label  className="block" htmlFor="">Puerta</label>
                    <select className="block border border-black" name="" id="">
                      {
                        listDoorsAccess.map(door => (
                          <option id={door.id} value={door.id}>{door.name}</option>
                        ))
                      }
                    </select>
                  </>
                  :
                  <></>
                }
                
            </form>
        </div>
    </FormLayout>
  )
}
