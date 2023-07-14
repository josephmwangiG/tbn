import { defineStore } from "pinia";
import axios from "axios";

export const useAuthStore = defineStore("auth", {
    state: () => ({
        user: null,
        headers: {
            headers: {
                Authorization: "Bearer " + localStorage.getItem("token"),
            },
        },
    }),
    actions: {
        async login(form) {
            try {
                let response = await axios.post("login", form);
                this.user = response.data.user;
                return {
                    status: true,
                    token: response.data.token,
                    message: response.data.message,
                };
            } catch (e) {
                return e.response;
            }
        },
        async getUser() {
            try {
                let response = await axios.get("get-user", this.headers);
                this.user = response.data.user;
                return true;
            } catch (e) {
                return e.response;
            }
        },
    },
});
