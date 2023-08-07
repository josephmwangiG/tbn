import axios from "axios";
import { defineStore } from "pinia";

export const useBusinessStore = defineStore("business", {
    state: () => ({
        businesses: null,
        business: null,
        headers: {
            headers: {
                Authorization: "Bearer " + localStorage.getItem("token"),
            },
        },
    }),
    actions: {
        async getBusinesses() {
            try {
                let response = await axios.get("businesses");
                this.businesses = response.data.businesses;
                return true;
            } catch (e) {
                return e.response;
            }
        },
        async getBusiness(id) {
            try {
                let response = await axios.get("businesses/" + id);
                this.business = response.data.business;
                return true;
            } catch (e) {
                return e.response;
            }
        },
        async addBusinesses(form) {
            try {
                let response = await axios.post("businesses", form);
                this.businesses = response.data.businesses;
                return true;
            } catch (e) {
                return e.response;
            }
        },
        async getBusinessProfile(id) {
            try {
                let response = await axios.get(
                    "businesses/" + id + "/get/profile",
                    this.headers
                );
                this.business = response.data.business;
                return true;
            } catch (e) {
                return e.response;
            }
        },
        async updateBusinessProfile(form) {
            try {
                let response = await axios.put(
                    "businesses/" + form.id + "/update/profile",
                    form,
                    this.headers
                );
                this.business = response.data.business;
                return true;
            } catch (e) {
                return e.response;
            }
        },
        async addBusinessOwner(form) {
            try {
                let response = await axios.post(
                    "businesses/add/business/owner",
                    form,
                    this.headers
                );
                this.business = response.data.business;
                return true;
            } catch (e) {
                return e.response;
            }
        },
        async approveAccount(id, option) {
            try {
                let response = await axios.put(
                    "businesses/" + id + "/" + option
                );
                this.businesses = response.data.businesses;
                return true;
            } catch (e) {
                return e.response;
            }
        },
    },
});
