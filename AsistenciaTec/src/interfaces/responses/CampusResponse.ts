import type { BaseResponse } from "./BaseResponse";

export interface CampusResponse extends BaseResponse {
    name: string
    state_name: string
    municipality: string
}