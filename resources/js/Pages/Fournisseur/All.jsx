import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import Table from '@/Components/Table';






const columns=[
    'email',
    'telephone',
]
export default function All({ auth, fournisseur }) {
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Fournisseurs</h2>}
        >
            <Head title="Fournisseurs" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <Table items={fournisseur} columns={columns} primary={"Nom du fournisseur"} action="fournisseur.edit" ></Table>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}