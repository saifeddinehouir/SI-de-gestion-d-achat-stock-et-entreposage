import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import UpdateFournisseurInformationForm from './Partials/UpdateFournisseurInformationForm';
export default function Edit({auth,fournisseur}){
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Fournisseur #{fournisseur.id}</h2>}>
            <Head title={"Fournisseur #"+fournisseur.id}/>
        
            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <UpdateFournisseurInformationForm fournisseur={fournisseur} className='max-w-xl'></UpdateFournisseurInformationForm>
                    </div>
                </div>
            </div>

        </AuthenticatedLayout>
    )
}