<template>

    <Head>
        <title>
            Users
        </title>
        <meta name="description" content="User management page" head-key="description" />
    </Head>
    <div class="p-8">
        <h1 class="text-3xl pb-8">Users</h1>


        <div class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default">
            <table class="w-full text-sm text-left rtl:text-right text-body">

                <tbody>
                    <tr v-for="user in users.data" :key="user.id" class="bg-neutral-primary border-b border-default">
                        <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                            {{ user.name }}
                        </th>

                        <td class="px-6 py-4 text-green-600">
                            <Link :href="`/users/${user.id}/edit`">
                            Edit</Link>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
        shadcsn
        <div>
            <Pagination class="my-4" v-if="users.last_page > 1">
                <PaginationPrevious :disabled="!users.prev_page_url"
                    @click="$inertia.get(users.prev_page_url, {}, { preserveState: true, preserveScroll: true })">
                    Previous
                </PaginationPrevious>
                <PaginationContent>
                    <PaginationItem v-for="page in users.last_page" :key="page" :active="page === users.current_page"
                        @click="$inertia.get(users.path + '?page=' + page, {}, { preserveState: true, preserveScroll: true })">
                        {{ page }}
                    </PaginationItem>
                </PaginationContent>
                <PaginationNext :disabled="!users.next_page_url"
                    @click="$inertia.get(users.next_page_url, {}, { preserveState: true, preserveScroll: true })">
                    Next
                </PaginationNext>
            </Pagination>
        </div>
        simples2
        <div>
            <template v-for="link in users.links" :key="link.label">
                <!-- Disabled link (no URL) -->
                <span v-if="!link.url" class="px-4 py-2 bg-gray-300 text-gray-600 rounded mr-2 cursor-not-allowed"
                    v-html="link.label" />

                <!-- Active link -->
                <Link v-else :href="link.url" :class="[
                    'px-4 py-2 rounded mr-2',
                    link.active
                        ? 'bg-blue-500 text-white'
                        : 'bg-gray-200'
                ]" v-html="link.label" />
            </template>
        </div>
        Simple
        <div>
            <Component :is="link.url ? 'Link' : 'span'" v-for="link in users.links" :key="link.label" :href="link.url"
                :class="[
                    'px-4 py-2 rounded mr-2',
                    link.active
                        ? 'bg-blue-500 text-white'
                        : 'bg-gray-200'
                ]" v-html="link.label" />
        </div>
        Jeff
        <PaginationJeff :links="users.links"></PaginationJeff>
        autocomplete
        <div class=" pt-4">
            <button class="px-4 py-2 bg-gray-200 rounded mr-2" :disabled="!users.prev_page_url"
                @click="$inertia.get(users.prev_page_url, {}, { preserveState: true, preserveScroll: true })">
                Previous
            </button>
            <button class="px-4 py-2 bg-gray-200 rounded" :disabled="!users.next_page_url"
                @click="$inertia.get(users.next_page_url, {}, { preserveState: true, preserveScroll: true })">
                Next
            </button>
        </div>
    </div>
    <div class="p-8 pt-500">
        Current time is {{ time }}. <br />
        <NavLink class="list-none" href="/users" preserve-scroll>Refresh</NavLink>
    </div>
</template>

<script setup>
import PaginationJeff from '../shared/PaginationJeff.vue';
import NavLink from '../shared/NavLink.vue';
import {
  Pagination,
  PaginationContent,
  PaginationEllipsis,
  PaginationItem,
  PaginationNext,
  PaginationPrevious,
} from '@/components/ui/pagination'
defineProps({
    time: String,
    users: Object,
});
</script>
